<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Request;
// use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Encounters;
class DashboardController extends Controller
{
	public function welcome(){
		 try {
		 		date_default_timezone_set('Africa/Nairobi');
		 	 	//$todaysDate = date('Y-m-d')." 07:29:59";
		 	 	$todaysDate = "2018-05-01 07:30:00";
		 	 	$todayeDate = "2018-05-11 08:30:59";
			 	
  				// $standard = DB::table('oc_encounters')
  				// 			->join('oc_debets', 'oc_debets.oc_debet_encounteruid', '=',  'convert(varchar,oc_encounter_serverid)+\'.\'+convert(varchar,oc_encounter_objectid)')
  				// 			->where('oc_debets.OC_DEBET_SERVICEUID', 'LIKE',  '%STD%')
  				// 			->whereBetween('convert(smalldatetime,oc_encounters.OC_ENCOUNTER_BEGINDATE)',['2018-06-15 07:30:00', '2018-06-15 08:30:59'])
  				// 			->distinct('oc_encounters.oc_encounter_patientuid');
  				
  				$standard0 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 06:00:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 07:30:00\'  and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard0 = collect($standard0);
			 	 	$naStandard0 = $naStandard0->count();
			 	$private0 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 06:00:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 07:30:00\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate0 = collect($private0);
			 	$naPrivate0 = $naPrivate0->count();
  				$standard = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 07:30:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 08:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard = collect($standard);
			 	 	$naStandard = $naStandard->count();
			 	$private = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 07:30:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 08:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate = collect($private);
			 	$naPrivate = $naPrivate->count();
			 	$standard2 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 08:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 09:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard2 = collect($standard2);
			 	 	$naStandard2 = $naStandard2->count();
			 	$private2 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 08:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 09:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate2 = collect($private2);
			 	$naPrivate2 = $naPrivate2->count();
			 	$standard3 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 09:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 10:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard3 = collect($standard3);
			 	 	$naStandard3 = $naStandard3->count();
			 	$private3 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 09:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 10:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate3 = collect($private3);
			 	$naPrivate3 = $naPrivate3->count();
			 	$standard4 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 10:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 11:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard4 = collect($standard4);
			 	 	$naStandard4 = $naStandard4->count();
			 	$private4 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 10:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 11:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate4 = collect($private4);
			 	$naPrivate4 = $naPrivate4->count();
			 	$standard5 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 11:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 12:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard5 = collect($standard5);
			 	 	$naStandard5 = $naStandard5->count();
			 	$private5 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 11:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 12:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate5 = collect($private5);
			 	$naPrivate5 = $naPrivate5->count();
			 	$standard6 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 12:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 13:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard6 = collect($standard6);
			 	 	$naStandard6 = $naStandard6->count();
			 	$private6 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 12:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 13:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate6 = collect($private6);
			 	$naPrivate6 = $naPrivate6->count();
			 	$standard7 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 13:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 14:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard7 = collect($standard7);
			 	 	$naStandard7 = $naStandard7->count();
			 	$private7 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 13:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 14:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate7 = collect($private7);
			 	$naPrivate7 = $naPrivate7->count();
			 	$standard8 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 14:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 15:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid');
			 		$naStandard8 = collect($standard8);
			 	 	$naStandard8 = $naStandard8->count();
			 	$private8 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 14:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 15:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate8 = collect($private8);
			 	$naPrivate8 = $naPrivate8->count();
			 	$standard9 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 15:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 16:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard9 = collect($standard9);
			 	 	$naStandard9 = $naStandard9->count();
			 	$private9 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 15:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 16:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate9 = collect($private9);
			 	$naPrivate9 = $naPrivate9->count();
			 	$todayEye = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    substring(convert(varchar, getdate(), 120),1,10)
					 AND substring(convert(varchar, getdate(), 120),1,10)) and
					OC_DEBET_SERVICEUID like \'%EYE%\'
					group by oc_encounter_patientuid ');
			 		$todayEye = collect($todayEye);
			 	 	$todayEye = $todayEye->count();
			 	 	$yesterdayEye = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    dateadd(day,-1, cast(getdate() as date))
					 AND dateadd(day,-1, cast(getdate() as date))) and
					OC_DEBET_SERVICEUID like \'%EYE%\'
					group by oc_encounter_patientuid ');
			 		$yesterdayEye = collect($yesterdayEye);
			 	 	$yesterdayEye = $yesterdayEye->count();
			 	 	$todayOrtho = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    substring(convert(varchar, getdate(), 120),1,10)
					 AND substring(convert(varchar, getdate(), 120),1,10)) and
					OC_DEBET_SERVICEUID like \'%OTH%\'
					group by oc_encounter_patientuid ');
			 		$todayOrtho = collect($todayOrtho);
			 	 	$todayOrtho = $todayOrtho->count();
			 	 	$yesterdayOrtho = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    dateadd(day,-1, cast(getdate() as date))
					 AND dateadd(day,-1, cast(getdate() as date))) and
					OC_DEBET_SERVICEUID like \'%OTH%\'
					group by oc_encounter_patientuid ');
			 		$yesterdayOrtho = collect($yesterdayOrtho);
			 	 	$yesterdayOrtho = $yesterdayOrtho->count();
			 	 	$todayOptical = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    substring(convert(varchar, getdate(), 120),1,10)
					 AND substring(convert(varchar, getdate(), 120),1,10)) and
					OC_DEBET_SERVICEUID like \'%OPT%\'
					group by oc_encounter_patientuid ');
			 		$todayOptical = collect($todayOptical);
			 	 	$todayOptical = $todayOptical->count();
			 	 	$yesterdayOptical = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    dateadd(day,-1, cast(getdate() as date))
					 AND dateadd(day,-1, cast(getdate() as date))) and
					OC_DEBET_SERVICEUID like \'%OPT%\'
					group by oc_encounter_patientuid ');
			 		$yesterdayOptical = collect($yesterdayOptical);
			 	 	$yesterdayOptical = $yesterdayOptical->count();
			 	 	$todayRehab = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    substring(convert(varchar, getdate(), 120),1,10)
					 AND substring(convert(varchar, getdate(), 120),1,10)) and
					OC_DEBET_SERVICEUID like \'%RHB%\'
					group by oc_encounter_patientuid ');
			 		$todayRehab = collect($todayRehab);
			 	 	$todayRehab = $todayRehab->count();
			 	 	$yesterdayRehab = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				     dateadd(day,-1, cast(getdate() as date))
					 AND dateadd(day,-1, cast(getdate() as date))) and
					OC_DEBET_SERVICEUID like \'%RHB%\'
					group by oc_encounter_patientuid ');
			 		$yesterdayRehab = collect($yesterdayRehab);
			 	 	$yesterdayRehab = $yesterdayRehab->count();
			 	 	$todayEnt = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    substring(convert(varchar, getdate(), 120),1,10)
					 AND substring(convert(varchar, getdate(), 120),1,10)) and
					OC_DEBET_SERVICEUID like \'%ENT%\'
					group by oc_encounter_patientuid ');
			 		$todayEnt = collect($todayEnt);
			 	 	$todayEnt = $todayEnt->count();
			 	 	$yesterdayEnt = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    dateadd(day,-1, cast(getdate() as date))
					 AND dateadd(day,-1, cast(getdate() as date))) and
					OC_DEBET_SERVICEUID like \'%ENT%\'
					group by oc_encounter_patientuid ');
			 		$yesterdayEnt = collect($yesterdayEnt);
			 	 	$yesterdayEnt = $yesterdayEnt->count();
			 	 	$todayVVF = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    substring(convert(varchar, getdate(), 120),1,10)
					 AND substring(convert(varchar, getdate(), 120),1,10)) and
					OC_DEBET_SERVICEUID like \'%VVF%\'
					group by oc_encounter_patientuid ');
			 		$todayVVF = collect($todayVVF);
			 	 	$todayVVF = $todayVVF->count();
			 	 	$yesterdayVVF = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    dateadd(day,-1, cast(getdate() as date))
					 AND dateadd(day,-1, cast(getdate() as date))) and
					OC_DEBET_SERVICEUID like \'%VVF%\'
					group by oc_encounter_patientuid ');
			 		$yesterdayVVF = collect($yesterdayVVF);
			 	 	$yesterdayVVF = $yesterdayVVF->count();
			 	 	$todayGYN = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    substring(convert(varchar, getdate(), 120),1,10)
					 AND substring(convert(varchar, getdate(), 120),1,10)) and
					OC_DEBET_SERVICEUID like \'%GYN%\'
					group by oc_encounter_patientuid ');
			 		$todayGYN = collect($todayGYN);
			 	 	$todayGYN = $todayGYN->count();
			 	 	$yesterdayGYN = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    dateadd(day,-1, cast(getdate() as date))
					 AND dateadd(day,-1, cast(getdate() as date))) and
					OC_DEBET_SERVICEUID like \'%GYN%\'
					group by oc_encounter_patientuid ');
			 		$yesterdayGYN = collect($yesterdayGYN);
			 	 	$yesterdayGYN = $yesterdayGYN->count();
		    return view('dashboard_admin', compact('naStandard0','naPrivate0','naStandard','naPrivate','naStandard2','naPrivate2','naStandard3','naPrivate3','naStandard4','naPrivate4','naStandard5','naPrivate5','naStandard6','naPrivate6','naStandard7','naPrivate7','naStandard8','naPrivate8','naStandard9','naPrivate9','todayEye','yesterdayEye','todayOrtho','todayOptical','yesterdayOptical','todayRehab','todayEnt','todayVVF','todayGYN','yesterdayGYN','yesterdayVVF','yesterdayEnt','yesterdayRehab','yesterdayOptical','yesterdayOrtho'));
		} catch (\Exception $e) {
		    die("Could not connect to the database.  Please check your configuration.");
		}
	}
	public function callPatient(){
		 try {
		   // DB::connection()->getPdo();

		 // 	@$submit = $_POST['process'];
			// @$word = $_POST['texttospeech'];

			// $voice = new COM("SAPI.SpVoice");

			// if($_SERVER["REQUEST_METHOD"] == "POST" and isset($submit) and !empty($word)){
			//     $voice->Speak($word);
			// }
		 	$patientTobeCalled = DB::connection('sqlsrv')->select('select top 1 a.personid,a.firstname,a.middlename,a.lastname,e.Encounter_ip from ocadmin.dbo.Admin a, openclinic.dbo.Encounter_queue_tokens e where cast(a.personid as varchar(100)) = e.Encounter_ip order by Queues_id asc');

		 	$todaysQueue = DB::connection('sqlsrv')->select('select a.personid,a.firstname,a.middlename,a.lastname,e.Encounter_ip,
				e.Encounter_Object_ID,e.Encounter_token,e.Audit_Timestamp,
				Department=STUFF((
				          SELECT distinct \',\' + substring(ee.oc_encounter_serviceuid,5,3)
				          FROM openclinic..oc_encounter_services ee
				          WHERE ee.oc_encounter_objectid = e.Encounter_Object_ID
				          FOR XML PATH(\'\'), TYPE).value(\'.\', \'NVARCHAR(MAX)\'), 1, 1, \'\')
				from ocadmin.dbo.Admin a, openclinic.dbo.Encounter_queue_tokens e
				where 
				cast(a.personid as varchar(100)) = e.Encounter_ip  and cast(e.Audit_Timestamp as date) = CONVERT(date, getdate()) order by Queues_id asc');
		    return view('staff_call', compact('patientTobeCalled','todaysQueue'));
		} catch (\Exception $e) {
		    die("Could not connect to the database.  Please check your configuration.");
		}
	}
	public function queue(){
		 try {
		 	$patientTobeCalled = DB::connection('sqlsrv')->select('select top 1 a.personid,a.firstname,a.middlename,a.lastname,e.Encounter_ip from ocadmin.dbo.Admin a, openclinic.dbo.Encounter_queue_tokens e where cast(a.personid as varchar(100)) = e.Encounter_ip order by Queues_id asc');

		 	$todaysQueue = DB::connection('sqlsrv')->select('select a.personid,a.firstname,a.middlename,a.lastname,e.Encounter_ip,
				e.Encounter_Object_ID,e.Encounter_token,substring(convert(varchar,cast(e.Audit_Timestamp  as datetime)),12,17) as Timea,DATEDIFF (MINUTE , e.Audit_Timestamp,CONVERT(datetime, getdate())) AS Wait, 
				Department=STUFF((
				          SELECT distinct \',\' + substring(ee.oc_encounter_serviceuid,5,3)
				          FROM openclinic..oc_encounter_services ee
				          WHERE ee.oc_encounter_objectid = e.Encounter_Object_ID
				          FOR XML PATH(\'\'), TYPE).value(\'.\', \'NVARCHAR(MAX)\'), 1, 1, \'\')
				from ocadmin.dbo.Admin a, openclinic.dbo.Encounter_queue_tokens e
				where 
				cast(a.personid as varchar(100)) = e.Encounter_ip  and cast(e.Audit_Timestamp as date) = CONVERT(date, getdate()) order by Queues_id asc');
		    return view('queues', compact('patientTobeCalled','todaysQueue'));
		} catch (\Exception $e) {
		    die("Could not connect to the database.  Please check your configuration.");
		}
	}
   
}
