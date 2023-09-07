<?php

use App\Models\Resource;
use Illuminate\Http\Request;

public function create()
{
    return view('resources.create');
}

public function edit(Resource $resource)
{
    return view('resources.edit', compact('resource'));
}
