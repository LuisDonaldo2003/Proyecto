<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Filters\RegistrationFilters;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use App\Http\Resources\RegistrationCollection;
use App\Http\Resources\RegistrationResource;

class ApiRegistrationController extends Controller
{
    public function index(Request $request)
    {
        $filter = new RegistrationFilters();
        $queryItems = $filter->transform($request);

        $registration = Registration::where($queryItems);
        return new RegistrationCollection($registration->paginate()->appends($request->query()));
    }

    public function store(StoreRegistrationRequest $request)
    {
        $registration = Registration::create($request->all());
        return response()->json(['message' => 'Registro creado exitosamente', 'data' => new RegistrationResource($registration)]);
    }

    public function show(Registration $registration)
    {
        return new RegistrationResource($registration);
    }

    public function update(UpdateRegistrationRequest $request, Registration $registration)
    {
        $registration->update($request->all());
        return response()->json(['message' => 'Registro actualizado exitosamente', 'data' => new RegistrationResource($registration)]);
    }

    public function destroy(Registration $registration)
    {
        $registration->delete();

        return response()->json(['message' => 'Registro eliminado exitosamente']);
    }
}
