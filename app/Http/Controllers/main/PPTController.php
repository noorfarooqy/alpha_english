<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PPTController extends Controller
{
    //
    protected $ppts ;
    public function __construct()
    {
        $this->ppts = [
            "motor_grand",
            "golf_club",
            "flash_card",
            "farm_animals",
            "old_macdonald_farm",
            "animal_flash_card",
            "hungry_monkey",
            "picnic_flash_card",
            "adventure_picnic"
        ];
    }
    public function listPPTs(Request $request){

       $ppts = $this->ppts;
        return view('0.ppts.list_ppts', compact('ppts'));
    }
    public function getPPT(Request $request, $ppt){
        abort_if(!in_array($ppt, $this->ppts),404, 'PPT is not in the demo');

        return view('0.ppts.'.$ppt);
    }
}
