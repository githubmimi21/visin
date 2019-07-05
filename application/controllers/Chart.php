<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {
	function grafik()
	{
		//Grafik 1

		$chartData=file_get_contents('assets/jumpendmiskin.json');
		$chartData=json_decode($chartData);
		$res=array();
		foreach ($chartData as $row) {
			$dat=[$row->kab,(double)$row->jpms];
			array_push($res, $dat);
		}
		 
		$data['PieChartData']=json_encode($res);
		$data['PieChartTitle']='Presentase Jumlah Penduduk Miskin Di D.I Yogyakarta';
		 
		//Grafik 2 
		 
		$chartData1=file_get_contents('assets/jumTKI14-15.json');
		$chartData1=json_decode($chartData1);
		$res1=array();
		foreach ($chartData1 as $row) {
			$dat1=[$row->kab,(double)$row->thn,(double)$row->thn15];
			array_push($res1, $dat1);
		}
		
		$data['BarChartData1']=json_encode($res1);
		$data['BarChartTitle1']='Jumlah TKI Pada Tahun 2014-2015 Di D.I Yogyakarta';

		//Grafik 3

		$chartData2=file_get_contents('assets/jumpend14-15.json');
		$chartData2=json_decode($chartData2);
		$res2=array();
		foreach ($chartData2 as $row) {
			$dat2=[$row->kab,(double)$row->thn14,(double)$row->thn15];
			array_push($res2, $dat2);
		}
		
		$data['BarChartData2']=json_encode($res2);
		$data['BarChartTitle2']='Perbandingan Jumlah Penduduk Pada Tahun 2014-2015 Di D.I Yogyakarta';

		//Grafik 4

		$chartData3=file_get_contents('assets/perjumpendTki14.json');
		$chartData3=json_decode($chartData3);
		$res3=array();
		foreach ($chartData3 as $row) {
			$dat3=[$row->kab,(double)$row->thn14,(double)$row->jumtki];
			array_push($res3, $dat3);
		}
		
		$data['BarChartData3']=json_encode($res3);
		$data['BarChartTitle3']='Perbandingan Jumlah Penduduk dengan Jumlah TKI Pada Tahun 2014 Di D.I Yogyakarta';

		//Grafik 5

		$chartData4=file_get_contents('assets/perjumpendTki15.json');
		$chartData4=json_decode($chartData4);
		$res4=array();
		foreach ($chartData4 as $row) {
			$dat4=[$row->kab,(double)$row->thn15,(double)$row->jpthn15];
			array_push($res4, $dat4);
		}
		
		$data['BarChartData4']=json_encode($res4);
		$data['BarChartTitle4']='Perbandingan Jumlah Penduduk dengan Jumlah TKI Pada Tahun 2015 Di D.I Yogyakarta';

		//Grafik 6

		$chartData5=file_get_contents('assets/jumpendvsmiskin.json');
		$chartData5=json_decode($chartData5);
		$res5=array();
		foreach ($chartData5 as $row) {
			$dat5=[$row->kab,(double)$row->jpms,(double)$row->jp];
			array_push($res5, $dat5);
		}
		
		$data['BarChartData5']=json_encode($res5);
		$data['BarChartTitle5']='Perbandingan Jumlah Penduduk dengan Jumlah Penduduk Miskin Pada Tahun 2014 Di D.I Yogyakarta';

		//Grafik 7

		$chartData6=file_get_contents('assets/kerjaterdaftarlaki.json');
		$chartData6=json_decode($chartData6);
		$res6=array();
		foreach ($chartData6 as $row) {
			$dat6=[$row->tingkat,(double)$row->jum];
			array_push($res6, $dat6);
		}
		
		$data['BarChartData6']=json_encode($res6);
		$data['BarChartTitle6']='Jumlah Pencari Kerja Terdaftar (Laki-laki) Pada Tahun 2015 Di D.I Yogyakarta';

		//Grafik 8

		$chartData7=file_get_contents('assets/kerjaterdaftarperem.json');
		$chartData7=json_decode($chartData7);
		$res7=array();
		foreach ($chartData7 as $row) {
			$dat7=[$row->tingkat,(double)$row->jum];
			array_push($res7, $dat7);
		}
		
		$data['BarChartData7']=json_encode($res7);
		$data['BarChartTitle7']='Jumlah Pencari Kerja Terdaftar (Perempuan) Pada Tahun 2015 Di D.I Yogyakarta';

		//Grafik 9

		$chartData8=file_get_contents('assets/pencariperempuan.json');
		$chartData8=json_decode($chartData8);
		$res8=array();
		foreach ($chartData8 as $row) {
			$dat8=[$row->tingkat,(double)$row->jum];
			array_push($res8, $dat8);
		}
		
		$data['BarChartData8']=json_encode($res8);
		$data['BarChartTitle8']='Jumlah Perempuan Pencari Kerja Belum Ditempatkan Pada Tahun 2015 Di D.I Yogyakarta';

		//Grafik 10

		$chartData9=file_get_contents('assets/pencarilaki.json');
		$chartData9=json_decode($chartData9);
		$res9=array();
		foreach ($chartData9 as $row) {
			$dat9=[$row->tingkat,(double)$row->jum];
			array_push($res9, $dat9);
		}
		
		$data['BarChartData9']=json_encode($res9);
		$data['BarChartTitle9']='Jumlah Laki-Laki Pencari Kerja Belum Ditempatkan Pada Tahun 2015 Di D.I Yogyakarta';


		
		 $this->load->view('Grafik',$data);
		
		 
	}

 }