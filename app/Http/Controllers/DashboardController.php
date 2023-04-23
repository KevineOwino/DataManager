<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function managePrefix() {

        return view('auth.manage_prefix');
    }

    public function platesList() {

        return view('auth.plates_list');
    }


    public function returnedPlates() {

        return view('auth.returned_plates');
    }

    public function timsRegList() {

        return view('auth.tims_registration_list');
    }

    public function newTimsReg() {

        return view('');
    }


    public function vehicleDb() {

        return view('auth.vehicle_db');
    }




    public function vatSuppliers() {

        return view('auth.vat_suppliers');
    }




    public function clearAgent() {

        return view('auth.clearing_agents');
    }




    public function vehicleModel() {

        return view('auth.vehicle_model');
    }


  
}
