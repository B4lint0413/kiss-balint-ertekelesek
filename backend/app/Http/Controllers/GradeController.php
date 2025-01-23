<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGradeRequest;
use App\Http\Requests\UpdateGradeRequest;
use App\Http\Resources\GradeResource;
use App\Models\Grade;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return GradeResource::collection(Grade::with(['student', 'subject'])->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGradeRequest $request)
    {
        return new GradeResource(Grade::create($request->validated())->load(['student', 'subject']));
    }

    /**
     * Display the specified resource.
     */
    public function show(Grade $grade)
    {
        return new GradeResource($grade->load(['student', 'subject']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGradeRequest $request, Grade $grade)
    {
        $grade->update($request->validated());
        return new GradeResource(Grade::findOrFail($grade->id)->load(['student', 'subject']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Grade $grade)
    {
        $grade->delete();
        return response()->noContent();
    }
}
