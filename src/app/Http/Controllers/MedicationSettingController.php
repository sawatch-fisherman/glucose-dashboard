<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedicationSettingRequest;
use App\Http\Requests\UpdateMedicationSettingRequest;
use App\Models\MedicationSetting;
use Inertia\Inertia;
use Illuminate\Http\Request;

class MedicationSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userUuid = $request->user()->uuid;
        $userId = $request->user()->id;

        $medicationSettings = MedicationSetting::where(MedicationSetting::USER_ID, $userId)
            ->orderBy(MedicationSetting::ORDER, 'asc')
            ->get();

        $maxOrder = $medicationSettings->max(MedicationSetting::ORDER);

        return Inertia::render(
            'MedicationSettings/Index',
            [
                'medicines' => $medicationSettings,
                'maxOrder' => $maxOrder,
                'userUuid' => $userUuid,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicationSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MedicationSetting $medicationSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MedicationSetting $medicationSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicationSettingRequest $request, MedicationSetting $medicationSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MedicationSetting $medicationSetting)
    {
        //
    }
}
