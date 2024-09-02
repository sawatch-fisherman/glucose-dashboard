<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedicationSettingRequest;
use App\Http\Requests\UpdateMedicationSettingRequest;
use App\Models\MedicationSetting;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class MedicationSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicationSettings = MedicationSetting::all();
        Log::info($medicationSettings);

        // TODO:ユーザーIDで絞り込む
        $maxOrder = MedicationSetting::max('order');
        Log::info($maxOrder);

        // return Inertia::render('MedicationSettings/Index');
        return Inertia::render(
            'MedicationSettings/Index',
            [
                'medicines' => $medicationSettings,
                'maxOrder' => $maxOrder,
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
