<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::orderBy('name', 'asc')->get();
        $produk = Produk::all();
        return response()->json([
            'status' => true,
            'message' => 'Data produk berhasil ditemukan.',
            'data' => $produk
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100|unique:produk,name',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'nullable|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi gagal.',
                'errors' => $validator->errors()
            ], 422);
        }

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/produk';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        $produk = Produk::create($input);

        return response()->json([
            'status' => true,
            'message' => 'Produk berhasil ditambahkan.',
            'data' => $produk
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return response()->json([
                'status' => false,
                'message' => 'Produk tidak ditemukan.'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Produk berhasil ditemukan.',
            'data' => $produk
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return response()->json([
                'status' => false,
                'message' => 'Produk tidak ditemukan.'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100|unique:produk,name,' . $id . ',id',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'nullable|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi gagal.',
                'errors' => $validator->errors()
            ], 422);
        }

        $input = $request->all();

        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($produk->image) {
                $oldImagePath = public_path('images/produk/' . $produk->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload gambar baru
            $image = $request->file('image');
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path('images/produk'), $imageName);
            $input['image'] = $imageName;
        } else {
            $input['image'] = $produk->image;
        }

        $produk->update($input);

        return response()->json([
            'status' => true,
            'message' => 'Produk berhasil diperbarui.',
            'data' => $produk
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return response()->json([
                'status' => false,
                'message' => 'Produk tidak ditemukan.'
            ], 404);
        }

        if ($produk->image) {
            $imagePath = public_path('images/produk/' . $produk->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $produk->delete();

        return response()->json([
            'status' => true,
            'message' => 'Produk berhasil dihapus.'
        ], 200);
    }
}
