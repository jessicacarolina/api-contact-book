<?php

namespace App\Http\Controllers;
use App\Service\ContactService;
use App\Repository\ContactRepository;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contactService;
    private $contactRepository;

    public function __construct(ContactService $contactService, ContactRepository $contactRepository)
    {
        $this->contactService = $contactService;
        $this->contactRepository = $contactRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->contactRepository->index($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->contactService->create($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->contactRepository->show($id);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->contactService->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->contactService->destroy($id);
    }
}
