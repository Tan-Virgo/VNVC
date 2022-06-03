<?php

use Laudis\Neo4j\Authentication\Authenticate;
use Laudis\Neo4j\ClientBuilder;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;


require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . '\vendor\autoload.php';

    class  VacxinModel
    {
        public $MaVacxin;
        public $TenVacxin;
        public $NuocSanXuat;
        public $GiaBanLe;
        public $GiaYeuCau;
        public $TinhTrang;
        public $ChiTiet;
        public $ChongChiDinh;
        public $BaoQuan;
        public $MaNhomTuoi;
        public $TenNhomTuoi;
        public $MaNhomBenh;
        public $TenNhomBenh;

        function __construct() 
        {
            $this->MaVacxin = "";
            $this->TenVacxin = "";
            $this->NuocSanXuat = "";
            $this->GiaBanLe = "";
            $this->GiaYeuCau = "";
            $this->TinhTrang = "";
            $this->ChiTiet = "";
            $this->ChongChiDinh = "";
            $this->BaoQuan = "";
            $this->MaNhomTuoi = "";
            $this->TenNhomTuoi = "";
            $this->MaNhomBenh = "";
            $this->TenNhomBenh = "";
        }
        // Xem danh sách cầu thủ
        public static function listVacxin()
        {
            $client = connectNEO4J();
            
            $query_string = "
            MATCH (a:Vacxin), (b:NhomTuoi), (c:NhomBenh)
            WHERE (a)-[:DANH_CHO]->(b) AND (a)-[:DIEU_TRI_CHO]->(c)
            RETURN 
            a.MaVacxin AS MaVacxin, 
            a.TenVacxin AS TenVacxin, 
            a.NuocSanXuat AS NuocSanXuat, 
            a.GiaBanLe AS GiaBanLe, 
            a.GiaYeuCau AS GiaYeuCau, 
            a.TinhTrang AS TinhTrang, 
            a.ChiTiet AS ChiTiet, 
            a.ChongChiDinh AS ChongChiDinh, 
            a.BaoQuan AS BaoQuan,
            b.MaNhomTuoi AS MaNhomTuoi, 
            b.TenNhomTuoi AS TenNhomTuoi, 
            c.MaNhomBenh AS MaNhomBenh, 
            c.TenNhomBenh AS TenNhomBenh
            ORDER BY a.MaVacxin;
            ";


            $results = $client->run($query_string);
            // foreach ($results as $result) {
            //     // Returns a Node
            //     $node = $result->get('MaVacxin');
            
            //     echo $node->getProperty('MaVacxin');
            //     echo $result->get('MaVacxin');
            // }

            // $query = Laudis\Neo4j\Cypher\Query($client, $query_string);
            // $result = $query->getResultSet();

            // echo $result[0]['TenVacxin'];


            // $result = $client->run(<<<'CYPHER'
            // MATCH (a:Vacxin), (b:NhomTuoi), (c:NhomBenh)
            // WHERE (a)-[:DANH_CHO]->(b) AND (a)-[:DIEU_TRI_CHO]->(c)
            // RETURN 
            // a.MaVacxin AS MaVacxin, 
            // a.TenVacxin AS TenVacxin, 
            // a.NuocSanXuat AS NuocSanXuat, 
            // a.GiaBanLe AS GiaBanLe, 
            // a.GiaYeuCau AS GiaYeuCau, 
            // a.TinhTrang AS TinhTrang, 
            // a.ChiTiet AS ChiTiet, 
            // a.ChongChiDinh AS ChongChiDinh, 
            // a.BaoQuan AS BaoQuan,
            // b.MaNhomTuoi AS MaNhomTuoi, 
            // b.TenNhomTuoi AS TenNhomTuoi, 
            // c.MaNhomBenh AS MaNhomBenh, 
            // c.TenNhomBenh AS TenNhomBenh
            // ORDER BY a.MaVacxin;
            // CYPHER, ['dbName' => 'qltiemchung'])->first();

            // echo $result->get('MaVacxin');
            // echo $result->get('TenVacxin');


            // $result = $client->sendCypherQuery($query)->getResult();

            $dsvacxin = array();
            // if ($result) 
            // {            
            //     foreach ($result as $row) {
            //         $v = new VacxinModel();
            //         // $v->MaVacxin = $row->get("MaVacxin");
            //         // $v->TenVacxin = $row->get("TenVacxin");
            //         // $v->PhongBenh = $row["PhongBenh"];
            //         // $v->NuocSanXuat = $row["NuocSanXuat"];
            //         // $v->GiaBanLe = $row["GiaBanLe"];
            //         // $v->GiaYeuCau = $row["GiaYeuCau"];
            //         // $v->TinhTrang = $row["TinhTrang"];
            //         // $v->ChiTiet = $row["ChiTiet"];
            //         // $v->ChongChiDinh = $row["ChongChiDinh"];
            //         // $v->BaoQuan = $row["BaoQuan"];
            //         // $v->MaNhomTuoi = $row["MaNhomTuoi"];
            //         // $v->TenNhomTuoi = $row["TenNhomTuoi"];
            //         // $v->MaNhomBenh = $row["MaNhomBenh"];
            //         // $v->TenNhomBenh = $row["TenNhomBenh"];

            //         $v->MaVacxin = $row->get("MaVacxin");
            //         $v->TenVacxin = $row->get("TenVacxin");
            //         $v->NuocSanXuat = $row->get("NuocSanXuat");
            //         $v->GiaBanLe = $row->get("GiaBanLe");
            //         $v->GiaYeuCau = $row->get("GiaYeuCau");
            //         $v->TinhTrang = $row->get("TinhTrang");
            //         $v->ChiTiet = $row->get("ChiTiet");
            //         $v->ChongChiDinh = $row->get("ChongChiDinh");
            //         $v->BaoQuan = $row->get("BaoQuan");
            //         $v->MaNhomTuoi = $row->get("MaNhomTuoi");
            //         $v->TenNhomTuoi = $row->get("TenNhomTuoi");
            //         $v->MaNhomBenh = $row->get("MaNhomBenh");
            //         $v->TenNhomBenh = $row->get("TenNhomBenh");
            //         $dsvacxin[] = $v; //add an item into array

            //         // echo $row->get('TenVacxin').PHP_EOL;

            //     }
            // }
            //$client->close();
            return $dsplayer;
        }
    }
?>