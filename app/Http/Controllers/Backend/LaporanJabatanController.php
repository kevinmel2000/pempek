<?php

namespace Simpeg\Http\Controllers\Backend;

use Simpeg\Http\Controllers\Controller;
use Simpeg\Model\UnitKerja;
use Illuminate\Http\Request;
use DB;

/**
* Laporan Jabatan Controller
* @author Gede Lumbung <gedesumawijaya@gmail.com>
*/
class LaporanJabatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:konfigurasi-jabatan');
    }
	
	public function index(UnitKerja $unitKerja)
	{
		$unit_kerja = $unitKerja->where('parent_id',0)->get();
		return view('backend.laporan.jabatan', compact('unit_kerja'));
	}
	
	public function prints($type, UnitKerja $unitKerja)
	{
		$unit_kerja = $unitKerja->where('parent_id',0)->get();
		return view('backend.laporan.jabatan_cetak', compact('unit_kerja', 'type'));
	}
}