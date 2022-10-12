<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabupatenTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('kabupatens')->delete();

        DB::table('kabupatens')->insert(array(
            0 =>
            array(
                'id_kabupaten' => 1101,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN SIMEULUE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id_kabupaten' => 1102,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN ACEH SINGKIL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id_kabupaten' => 1103,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN ACEH SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'id_kabupaten' => 1104,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN ACEH TENGGARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array(
                'id_kabupaten' => 1105,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN ACEH TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array(
                'id_kabupaten' => 1106,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN ACEH TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array(
                'id_kabupaten' => 1107,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN ACEH BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array(
                'id_kabupaten' => 1108,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN ACEH BESAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array(
                'id_kabupaten' => 1109,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN PIDIE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array(
                'id_kabupaten' => 1110,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN BIREUEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array(
                'id_kabupaten' => 1111,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN ACEH UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array(
                'id_kabupaten' => 1112,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN ACEH BARAT DAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array(
                'id_kabupaten' => 1113,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN GAYO LUES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array(
                'id_kabupaten' => 1114,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN ACEH TAMIANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 =>
            array(
                'id_kabupaten' => 1115,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN NAGAN RAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 =>
            array(
                'id_kabupaten' => 1116,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN ACEH JAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 =>
            array(
                'id_kabupaten' => 1117,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN BENER MERIAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 =>
            array(
                'id_kabupaten' => 1118,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KABUPATEN PIDIE JAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array(
                'id_kabupaten' => 1171,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KOTA BANDA ACEH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 =>
            array(
                'id_kabupaten' => 1172,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KOTA SABANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 =>
            array(
                'id_kabupaten' => 1173,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KOTA LANGSA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 =>
            array(
                'id_kabupaten' => 1174,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KOTA LHOKSEUMAWE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 =>
            array(
                'id_kabupaten' => 1175,
                'id_provinsi' => 11,
                'nama_kabupaten' => 'KOTA SUBULUSSALAM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 =>
            array(
                'id_kabupaten' => 1201,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN NIAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 =>
            array(
                'id_kabupaten' => 1202,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN MANDAILING NATAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 =>
            array(
                'id_kabupaten' => 1203,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN TAPANULI SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 =>
            array(
                'id_kabupaten' => 1204,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN TAPANULI TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 =>
            array(
                'id_kabupaten' => 1205,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN TAPANULI UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 =>
            array(
                'id_kabupaten' => 1206,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN TOBA SAMOSIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 =>
            array(
                'id_kabupaten' => 1207,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN LABUHAN BATU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 =>
            array(
                'id_kabupaten' => 1208,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN ASAHAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 =>
            array(
                'id_kabupaten' => 1209,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN SIMALUNGUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 =>
            array(
                'id_kabupaten' => 1210,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN DAIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 =>
            array(
                'id_kabupaten' => 1211,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN KARO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 =>
            array(
                'id_kabupaten' => 1212,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN DELI SERDANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 =>
            array(
                'id_kabupaten' => 1213,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN LANGKAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 =>
            array(
                'id_kabupaten' => 1214,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN NIAS SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 =>
            array(
                'id_kabupaten' => 1215,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN HUMBANG HASUNDUTAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 =>
            array(
                'id_kabupaten' => 1216,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN PAKPAK BHARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 =>
            array(
                'id_kabupaten' => 1217,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN SAMOSIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 =>
            array(
                'id_kabupaten' => 1218,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN SERDANG BEDAGAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 =>
            array(
                'id_kabupaten' => 1219,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN BATU BARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 =>
            array(
                'id_kabupaten' => 1220,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN PADANG LAWAS UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 =>
            array(
                'id_kabupaten' => 1221,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN PADANG LAWAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 =>
            array(
                'id_kabupaten' => 1222,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN LABUHAN BATU SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 =>
            array(
                'id_kabupaten' => 1223,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN LABUHAN BATU UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 =>
            array(
                'id_kabupaten' => 1224,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN NIAS UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 =>
            array(
                'id_kabupaten' => 1225,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KABUPATEN NIAS BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 =>
            array(
                'id_kabupaten' => 1271,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KOTA SIBOLGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 =>
            array(
                'id_kabupaten' => 1272,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KOTA TANJUNG BALAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 =>
            array(
                'id_kabupaten' => 1273,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KOTA PEMATANG SIANTAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 =>
            array(
                'id_kabupaten' => 1274,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KOTA TEBING TINGGI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 =>
            array(
                'id_kabupaten' => 1275,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KOTA MEDAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 =>
            array(
                'id_kabupaten' => 1276,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KOTA BINJAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 =>
            array(
                'id_kabupaten' => 1277,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KOTA PADANGSIDIMPUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 =>
            array(
                'id_kabupaten' => 1278,
                'id_provinsi' => 12,
                'nama_kabupaten' => 'KOTA GUNUNGSITOLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 =>
            array(
                'id_kabupaten' => 1301,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KABUPATEN KEPULAUAN MENTAWAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 =>
            array(
                'id_kabupaten' => 1302,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KABUPATEN PESISIR SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 =>
            array(
                'id_kabupaten' => 1303,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KABUPATEN SOLOK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 =>
            array(
                'id_kabupaten' => 1304,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KABUPATEN SIJUNJUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 =>
            array(
                'id_kabupaten' => 1305,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KABUPATEN TANAH DATAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 =>
            array(
                'id_kabupaten' => 1306,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KABUPATEN PADANG PARIAMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 =>
            array(
                'id_kabupaten' => 1307,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KABUPATEN AGAM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 =>
            array(
                'id_kabupaten' => 1308,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KABUPATEN LIMA PULUH KOTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 =>
            array(
                'id_kabupaten' => 1309,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KABUPATEN PASAMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 =>
            array(
                'id_kabupaten' => 1310,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KABUPATEN SOLOK SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 =>
            array(
                'id_kabupaten' => 1311,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KABUPATEN DHARMASRAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 =>
            array(
                'id_kabupaten' => 1312,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KABUPATEN PASAMAN BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 =>
            array(
                'id_kabupaten' => 1371,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KOTA PADANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 =>
            array(
                'id_kabupaten' => 1372,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KOTA SOLOK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 =>
            array(
                'id_kabupaten' => 1373,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KOTA SAWAH LUNTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 =>
            array(
                'id_kabupaten' => 1374,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KOTA PADANG PANJANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 =>
            array(
                'id_kabupaten' => 1375,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KOTA BUKITTINGGI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 =>
            array(
                'id_kabupaten' => 1376,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KOTA PAYAKUMBUH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 =>
            array(
                'id_kabupaten' => 1377,
                'id_provinsi' => 13,
                'nama_kabupaten' => 'KOTA PARIAMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 =>
            array(
                'id_kabupaten' => 1401,
                'id_provinsi' => 14,
                'nama_kabupaten' => 'KABUPATEN KUANTAN SINGINGI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 =>
            array(
                'id_kabupaten' => 1402,
                'id_provinsi' => 14,
                'nama_kabupaten' => 'KABUPATEN INDRAGIRI HULU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 =>
            array(
                'id_kabupaten' => 1403,
                'id_provinsi' => 14,
                'nama_kabupaten' => 'KABUPATEN INDRAGIRI HILIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 =>
            array(
                'id_kabupaten' => 1404,
                'id_provinsi' => 14,
                'nama_kabupaten' => 'KABUPATEN PELALAWAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 =>
            array(
                'id_kabupaten' => 1405,
                'id_provinsi' => 14,
                'nama_kabupaten' => 'KABUPATEN S I A K',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 =>
            array(
                'id_kabupaten' => 1406,
                'id_provinsi' => 14,
                'nama_kabupaten' => 'KABUPATEN KAMPAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 =>
            array(
                'id_kabupaten' => 1407,
                'id_provinsi' => 14,
                'nama_kabupaten' => 'KABUPATEN ROKAN HULU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 =>
            array(
                'id_kabupaten' => 1408,
                'id_provinsi' => 14,
                'nama_kabupaten' => 'KABUPATEN BENGKALIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 =>
            array(
                'id_kabupaten' => 1409,
                'id_provinsi' => 14,
                'nama_kabupaten' => 'KABUPATEN ROKAN HILIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 =>
            array(
                'id_kabupaten' => 1410,
                'id_provinsi' => 14,
                'nama_kabupaten' => 'KABUPATEN KEPULAUAN MERANTI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 =>
            array(
                'id_kabupaten' => 1471,
                'id_provinsi' => 14,
                'nama_kabupaten' => 'KOTA PEKANBARU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 =>
            array(
                'id_kabupaten' => 1473,
                'id_provinsi' => 14,
                'nama_kabupaten' => 'KOTA D U M A I',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 =>
            array(
                'id_kabupaten' => 1501,
                'id_provinsi' => 15,
                'nama_kabupaten' => 'KABUPATEN KERINCI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 =>
            array(
                'id_kabupaten' => 1502,
                'id_provinsi' => 15,
                'nama_kabupaten' => 'KABUPATEN MERANGIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 =>
            array(
                'id_kabupaten' => 1503,
                'id_provinsi' => 15,
                'nama_kabupaten' => 'KABUPATEN SAROLANGUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 =>
            array(
                'id_kabupaten' => 1504,
                'id_provinsi' => 15,
                'nama_kabupaten' => 'KABUPATEN BATANG HARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 =>
            array(
                'id_kabupaten' => 1505,
                'id_provinsi' => 15,
                'nama_kabupaten' => 'KABUPATEN MUARO JAMBI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 =>
            array(
                'id_kabupaten' => 1506,
                'id_provinsi' => 15,
                'nama_kabupaten' => 'KABUPATEN TANJUNG JABUNG TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 =>
            array(
                'id_kabupaten' => 1507,
                'id_provinsi' => 15,
                'nama_kabupaten' => 'KABUPATEN TANJUNG JABUNG BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 =>
            array(
                'id_kabupaten' => 1508,
                'id_provinsi' => 15,
                'nama_kabupaten' => 'KABUPATEN TEBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 =>
            array(
                'id_kabupaten' => 1509,
                'id_provinsi' => 15,
                'nama_kabupaten' => 'KABUPATEN BUNGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 =>
            array(
                'id_kabupaten' => 1571,
                'id_provinsi' => 15,
                'nama_kabupaten' => 'KOTA JAMBI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 =>
            array(
                'id_kabupaten' => 1572,
                'id_provinsi' => 15,
                'nama_kabupaten' => 'KOTA SUNGAI PENUH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 =>
            array(
                'id_kabupaten' => 1601,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KABUPATEN OGAN KOMERING ULU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 =>
            array(
                'id_kabupaten' => 1602,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KABUPATEN OGAN KOMERING ILIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 =>
            array(
                'id_kabupaten' => 1603,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KABUPATEN MUARA ENIM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 =>
            array(
                'id_kabupaten' => 1604,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KABUPATEN LAHAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 =>
            array(
                'id_kabupaten' => 1605,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KABUPATEN MUSI RAWAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 =>
            array(
                'id_kabupaten' => 1606,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KABUPATEN MUSI BANYUASIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 =>
            array(
                'id_kabupaten' => 1607,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KABUPATEN BANYU ASIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 =>
            array(
                'id_kabupaten' => 1608,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KABUPATEN OGAN KOMERING ULU SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 =>
            array(
                'id_kabupaten' => 1609,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KABUPATEN OGAN KOMERING ULU TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 =>
            array(
                'id_kabupaten' => 1610,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KABUPATEN OGAN ILIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 =>
            array(
                'id_kabupaten' => 1611,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KABUPATEN EMPAT LAWANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 =>
            array(
                'id_kabupaten' => 1612,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 =>
            array(
                'id_kabupaten' => 1613,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KABUPATEN MUSI RAWAS UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 =>
            array(
                'id_kabupaten' => 1671,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KOTA PALEMBANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 =>
            array(
                'id_kabupaten' => 1672,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KOTA PRABUMULIH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 =>
            array(
                'id_kabupaten' => 1673,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KOTA PAGAR ALAM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 =>
            array(
                'id_kabupaten' => 1674,
                'id_provinsi' => 16,
                'nama_kabupaten' => 'KOTA LUBUKLINGGAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 =>
            array(
                'id_kabupaten' => 1701,
                'id_provinsi' => 17,
                'nama_kabupaten' => 'KABUPATEN BENGKULU SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 =>
            array(
                'id_kabupaten' => 1702,
                'id_provinsi' => 17,
                'nama_kabupaten' => 'KABUPATEN REJANG LEBONG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 =>
            array(
                'id_kabupaten' => 1703,
                'id_provinsi' => 17,
                'nama_kabupaten' => 'KABUPATEN BENGKULU UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 =>
            array(
                'id_kabupaten' => 1704,
                'id_provinsi' => 17,
                'nama_kabupaten' => 'KABUPATEN KAUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 =>
            array(
                'id_kabupaten' => 1705,
                'id_provinsi' => 17,
                'nama_kabupaten' => 'KABUPATEN SELUMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 =>
            array(
                'id_kabupaten' => 1706,
                'id_provinsi' => 17,
                'nama_kabupaten' => 'KABUPATEN MUKOMUKO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 =>
            array(
                'id_kabupaten' => 1707,
                'id_provinsi' => 17,
                'nama_kabupaten' => 'KABUPATEN LEBONG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 =>
            array(
                'id_kabupaten' => 1708,
                'id_provinsi' => 17,
                'nama_kabupaten' => 'KABUPATEN KEPAHIANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 =>
            array(
                'id_kabupaten' => 1709,
                'id_provinsi' => 17,
                'nama_kabupaten' => 'KABUPATEN BENGKULU TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 =>
            array(
                'id_kabupaten' => 1771,
                'id_provinsi' => 17,
                'nama_kabupaten' => 'KOTA BENGKULU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 =>
            array(
                'id_kabupaten' => 1801,
                'id_provinsi' => 18,
                'nama_kabupaten' => 'KABUPATEN LAMPUNG BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 =>
            array(
                'id_kabupaten' => 1802,
                'id_provinsi' => 18,
                'nama_kabupaten' => 'KABUPATEN TANGGAMUS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 =>
            array(
                'id_kabupaten' => 1803,
                'id_provinsi' => 18,
                'nama_kabupaten' => 'KABUPATEN LAMPUNG SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 =>
            array(
                'id_kabupaten' => 1804,
                'id_provinsi' => 18,
                'nama_kabupaten' => 'KABUPATEN LAMPUNG TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 =>
            array(
                'id_kabupaten' => 1805,
                'id_provinsi' => 18,
                'nama_kabupaten' => 'KABUPATEN LAMPUNG TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 =>
            array(
                'id_kabupaten' => 1806,
                'id_provinsi' => 18,
                'nama_kabupaten' => 'KABUPATEN LAMPUNG UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 =>
            array(
                'id_kabupaten' => 1807,
                'id_provinsi' => 18,
                'nama_kabupaten' => 'KABUPATEN WAY KANAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 =>
            array(
                'id_kabupaten' => 1808,
                'id_provinsi' => 18,
                'nama_kabupaten' => 'KABUPATEN TULANGBAWANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 =>
            array(
                'id_kabupaten' => 1809,
                'id_provinsi' => 18,
                'nama_kabupaten' => 'KABUPATEN PESAWARAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 =>
            array(
                'id_kabupaten' => 1810,
                'id_provinsi' => 18,
                'nama_kabupaten' => 'KABUPATEN PRINGSEWU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 =>
            array(
                'id_kabupaten' => 1811,
                'id_provinsi' => 18,
                'nama_kabupaten' => 'KABUPATEN MESUJI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 =>
            array(
                'id_kabupaten' => 1812,
                'id_provinsi' => 18,
                'nama_kabupaten' => 'KABUPATEN TULANG BAWANG BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 =>
            array(
                'id_kabupaten' => 1813,
                'id_provinsi' => 18,
                'nama_kabupaten' => 'KABUPATEN PESISIR BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 =>
            array(
                'id_kabupaten' => 1871,
                'id_provinsi' => 18,
                'nama_kabupaten' => 'KOTA BANDAR LAMPUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 =>
            array(
                'id_kabupaten' => 1872,
                'id_provinsi' => 18,
                'nama_kabupaten' => 'KOTA METRO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 =>
            array(
                'id_kabupaten' => 1901,
                'id_provinsi' => 19,
                'nama_kabupaten' => 'KABUPATEN BANGKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 =>
            array(
                'id_kabupaten' => 1902,
                'id_provinsi' => 19,
                'nama_kabupaten' => 'KABUPATEN BELITUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 =>
            array(
                'id_kabupaten' => 1903,
                'id_provinsi' => 19,
                'nama_kabupaten' => 'KABUPATEN BANGKA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 =>
            array(
                'id_kabupaten' => 1904,
                'id_provinsi' => 19,
                'nama_kabupaten' => 'KABUPATEN BANGKA TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 =>
            array(
                'id_kabupaten' => 1905,
                'id_provinsi' => 19,
                'nama_kabupaten' => 'KABUPATEN BANGKA SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 =>
            array(
                'id_kabupaten' => 1906,
                'id_provinsi' => 19,
                'nama_kabupaten' => 'KABUPATEN BELITUNG TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 =>
            array(
                'id_kabupaten' => 1971,
                'id_provinsi' => 19,
                'nama_kabupaten' => 'KOTA PANGKAL PINANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 =>
            array(
                'id_kabupaten' => 2101,
                'id_provinsi' => 21,
                'nama_kabupaten' => 'KABUPATEN KARIMUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 =>
            array(
                'id_kabupaten' => 2102,
                'id_provinsi' => 21,
                'nama_kabupaten' => 'KABUPATEN BINTAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 =>
            array(
                'id_kabupaten' => 2103,
                'id_provinsi' => 21,
                'nama_kabupaten' => 'KABUPATEN NATUNA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 =>
            array(
                'id_kabupaten' => 2104,
                'id_provinsi' => 21,
                'nama_kabupaten' => 'KABUPATEN LINGGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 =>
            array(
                'id_kabupaten' => 2105,
                'id_provinsi' => 21,
                'nama_kabupaten' => 'KABUPATEN KEPULAUAN ANAMBAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 =>
            array(
                'id_kabupaten' => 2171,
                'id_provinsi' => 21,
                'nama_kabupaten' => 'KOTA B A T A M',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 =>
            array(
                'id_kabupaten' => 2172,
                'id_provinsi' => 21,
                'nama_kabupaten' => 'KOTA TANJUNG PINANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 =>
            array(
                'id_kabupaten' => 3101,
                'id_provinsi' => 31,
                'nama_kabupaten' => 'KABUPATEN KEPULAUAN SERIBU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 =>
            array(
                'id_kabupaten' => 3171,
                'id_provinsi' => 31,
                'nama_kabupaten' => 'KOTA JAKARTA SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 =>
            array(
                'id_kabupaten' => 3172,
                'id_provinsi' => 31,
                'nama_kabupaten' => 'KOTA JAKARTA TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 =>
            array(
                'id_kabupaten' => 3173,
                'id_provinsi' => 31,
                'nama_kabupaten' => 'KOTA JAKARTA PUSAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 =>
            array(
                'id_kabupaten' => 3174,
                'id_provinsi' => 31,
                'nama_kabupaten' => 'KOTA JAKARTA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 =>
            array(
                'id_kabupaten' => 3175,
                'id_provinsi' => 31,
                'nama_kabupaten' => 'KOTA JAKARTA UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 =>
            array(
                'id_kabupaten' => 3201,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN BOGOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 =>
            array(
                'id_kabupaten' => 3202,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN SUKABUMI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 =>
            array(
                'id_kabupaten' => 3203,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN CIANJUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 =>
            array(
                'id_kabupaten' => 3204,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN BANDUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 =>
            array(
                'id_kabupaten' => 3205,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN GARUT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 =>
            array(
                'id_kabupaten' => 3206,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN TASIKMALAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 =>
            array(
                'id_kabupaten' => 3207,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN CIAMIS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 =>
            array(
                'id_kabupaten' => 3208,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN KUNINGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 =>
            array(
                'id_kabupaten' => 3209,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN CIREBON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 =>
            array(
                'id_kabupaten' => 3210,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN MAJALENGKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 =>
            array(
                'id_kabupaten' => 3211,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN SUMEDANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 =>
            array(
                'id_kabupaten' => 3212,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN INDRAMAYU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 =>
            array(
                'id_kabupaten' => 3213,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN SUBANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 =>
            array(
                'id_kabupaten' => 3214,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN PURWAKARTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 =>
            array(
                'id_kabupaten' => 3215,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN KARAWANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 =>
            array(
                'id_kabupaten' => 3216,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN BEKASI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 =>
            array(
                'id_kabupaten' => 3217,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN BANDUNG BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 =>
            array(
                'id_kabupaten' => 3218,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KABUPATEN PANGANDARAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 =>
            array(
                'id_kabupaten' => 3271,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KOTA BOGOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 =>
            array(
                'id_kabupaten' => 3272,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KOTA SUKABUMI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 =>
            array(
                'id_kabupaten' => 3273,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KOTA BANDUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 =>
            array(
                'id_kabupaten' => 3274,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KOTA CIREBON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 =>
            array(
                'id_kabupaten' => 3275,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KOTA BEKASI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 =>
            array(
                'id_kabupaten' => 3276,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KOTA DEPOK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 =>
            array(
                'id_kabupaten' => 3277,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KOTA CIMAHI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 =>
            array(
                'id_kabupaten' => 3278,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KOTA TASIKMALAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 =>
            array(
                'id_kabupaten' => 3279,
                'id_provinsi' => 32,
                'nama_kabupaten' => 'KOTA BANJAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 =>
            array(
                'id_kabupaten' => 3301,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN CILACAP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 =>
            array(
                'id_kabupaten' => 3302,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN BANYUMAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 =>
            array(
                'id_kabupaten' => 3303,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN PURBALINGGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 =>
            array(
                'id_kabupaten' => 3304,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN BANJARNEGARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 =>
            array(
                'id_kabupaten' => 3305,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN KEBUMEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 =>
            array(
                'id_kabupaten' => 3306,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN PURWOREJO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 =>
            array(
                'id_kabupaten' => 3307,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN WONOSOBO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 =>
            array(
                'id_kabupaten' => 3308,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN MAGELANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 =>
            array(
                'id_kabupaten' => 3309,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN BOYOLALI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 =>
            array(
                'id_kabupaten' => 3310,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN KLATEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 =>
            array(
                'id_kabupaten' => 3311,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN SUKOHARJO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 =>
            array(
                'id_kabupaten' => 3312,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN WONOGIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 =>
            array(
                'id_kabupaten' => 3313,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN KARANGANYAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 =>
            array(
                'id_kabupaten' => 3314,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN SRAGEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 =>
            array(
                'id_kabupaten' => 3315,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN GROBOGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 =>
            array(
                'id_kabupaten' => 3316,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN BLORA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 =>
            array(
                'id_kabupaten' => 3317,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN REMBANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 =>
            array(
                'id_kabupaten' => 3318,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN PATI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 =>
            array(
                'id_kabupaten' => 3319,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN KUDUS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 =>
            array(
                'id_kabupaten' => 3320,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN JEPARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 =>
            array(
                'id_kabupaten' => 3321,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN DEMAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 =>
            array(
                'id_kabupaten' => 3322,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN SEMARANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 =>
            array(
                'id_kabupaten' => 3323,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN TEMANGGUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 =>
            array(
                'id_kabupaten' => 3324,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN KENDAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 =>
            array(
                'id_kabupaten' => 3325,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN BATANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 =>
            array(
                'id_kabupaten' => 3326,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN PEKALONGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 =>
            array(
                'id_kabupaten' => 3327,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN PEMALANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 =>
            array(
                'id_kabupaten' => 3328,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN TEGAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 =>
            array(
                'id_kabupaten' => 3329,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KABUPATEN BREBES',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 =>
            array(
                'id_kabupaten' => 3371,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KOTA MAGELANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 =>
            array(
                'id_kabupaten' => 3372,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KOTA SURAKARTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 =>
            array(
                'id_kabupaten' => 3373,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KOTA SALATIGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 =>
            array(
                'id_kabupaten' => 3374,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KOTA SEMARANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 =>
            array(
                'id_kabupaten' => 3375,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KOTA PEKALONGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 =>
            array(
                'id_kabupaten' => 3376,
                'id_provinsi' => 33,
                'nama_kabupaten' => 'KOTA TEGAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 =>
            array(
                'id_kabupaten' => 3401,
                'id_provinsi' => 34,
                'nama_kabupaten' => 'KABUPATEN KULON PROGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 =>
            array(
                'id_kabupaten' => 3402,
                'id_provinsi' => 34,
                'nama_kabupaten' => 'KABUPATEN BANTUL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 =>
            array(
                'id_kabupaten' => 3403,
                'id_provinsi' => 34,
                'nama_kabupaten' => 'KABUPATEN GUNUNG KIDUL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 =>
            array(
                'id_kabupaten' => 3404,
                'id_provinsi' => 34,
                'nama_kabupaten' => 'KABUPATEN SLEMAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 =>
            array(
                'id_kabupaten' => 3471,
                'id_provinsi' => 34,
                'nama_kabupaten' => 'KOTA YOGYAKARTA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 =>
            array(
                'id_kabupaten' => 3501,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN PACITAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 =>
            array(
                'id_kabupaten' => 3502,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN PONOROGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 =>
            array(
                'id_kabupaten' => 3503,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN TRENGGALEK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 =>
            array(
                'id_kabupaten' => 3504,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN TULUNGAGUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 =>
            array(
                'id_kabupaten' => 3505,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN BLITAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 =>
            array(
                'id_kabupaten' => 3506,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN KEDIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 =>
            array(
                'id_kabupaten' => 3507,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN MALANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 =>
            array(
                'id_kabupaten' => 3508,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN LUMAJANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 =>
            array(
                'id_kabupaten' => 3509,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN JEMBER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 =>
            array(
                'id_kabupaten' => 3510,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN BANYUWANGI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 =>
            array(
                'id_kabupaten' => 3511,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN BONDOWOSO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 =>
            array(
                'id_kabupaten' => 3512,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN SITUBONDO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 =>
            array(
                'id_kabupaten' => 3513,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN PROBOLINGGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 =>
            array(
                'id_kabupaten' => 3514,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN PASURUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 =>
            array(
                'id_kabupaten' => 3515,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN SIDOARJO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 =>
            array(
                'id_kabupaten' => 3516,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN MOJOKERTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 =>
            array(
                'id_kabupaten' => 3517,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN JOMBANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 =>
            array(
                'id_kabupaten' => 3518,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN NGANJUK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 =>
            array(
                'id_kabupaten' => 3519,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN MADIUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 =>
            array(
                'id_kabupaten' => 3520,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN MAGETAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 =>
            array(
                'id_kabupaten' => 3521,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN NGAWI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 =>
            array(
                'id_kabupaten' => 3522,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN BOJONEGORO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 =>
            array(
                'id_kabupaten' => 3523,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN TUBAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 =>
            array(
                'id_kabupaten' => 3524,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN LAMONGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 =>
            array(
                'id_kabupaten' => 3525,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN GRESIK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 =>
            array(
                'id_kabupaten' => 3526,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN BANGKALAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 =>
            array(
                'id_kabupaten' => 3527,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN SAMPANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 =>
            array(
                'id_kabupaten' => 3528,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN PAMEKASAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 =>
            array(
                'id_kabupaten' => 3529,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KABUPATEN SUMENEP',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 =>
            array(
                'id_kabupaten' => 3571,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KOTA KEDIRI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 =>
            array(
                'id_kabupaten' => 3572,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KOTA BLITAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 =>
            array(
                'id_kabupaten' => 3573,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KOTA MALANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 =>
            array(
                'id_kabupaten' => 3574,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KOTA PROBOLINGGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 =>
            array(
                'id_kabupaten' => 3575,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KOTA PASURUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 =>
            array(
                'id_kabupaten' => 3576,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KOTA MOJOKERTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 =>
            array(
                'id_kabupaten' => 3577,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KOTA MADIUN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 =>
            array(
                'id_kabupaten' => 3578,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KOTA SURABAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 =>
            array(
                'id_kabupaten' => 3579,
                'id_provinsi' => 35,
                'nama_kabupaten' => 'KOTA BATU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 =>
            array(
                'id_kabupaten' => 3601,
                'id_provinsi' => 36,
                'nama_kabupaten' => 'KABUPATEN PANDEGLANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 =>
            array(
                'id_kabupaten' => 3602,
                'id_provinsi' => 36,
                'nama_kabupaten' => 'KABUPATEN LEBAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 =>
            array(
                'id_kabupaten' => 3603,
                'id_provinsi' => 36,
                'nama_kabupaten' => 'KABUPATEN TANGERANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 =>
            array(
                'id_kabupaten' => 3604,
                'id_provinsi' => 36,
                'nama_kabupaten' => 'KABUPATEN SERANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 =>
            array(
                'id_kabupaten' => 3671,
                'id_provinsi' => 36,
                'nama_kabupaten' => 'KOTA TANGERANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 =>
            array(
                'id_kabupaten' => 3672,
                'id_provinsi' => 36,
                'nama_kabupaten' => 'KOTA CILEGON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 =>
            array(
                'id_kabupaten' => 3673,
                'id_provinsi' => 36,
                'nama_kabupaten' => 'KOTA SERANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 =>
            array(
                'id_kabupaten' => 3674,
                'id_provinsi' => 36,
                'nama_kabupaten' => 'KOTA TANGERANG SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 =>
            array(
                'id_kabupaten' => 5101,
                'id_provinsi' => 51,
                'nama_kabupaten' => 'KABUPATEN JEMBRANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 =>
            array(
                'id_kabupaten' => 5102,
                'id_provinsi' => 51,
                'nama_kabupaten' => 'KABUPATEN TABANAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 =>
            array(
                'id_kabupaten' => 5103,
                'id_provinsi' => 51,
                'nama_kabupaten' => 'KABUPATEN BADUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 =>
            array(
                'id_kabupaten' => 5104,
                'id_provinsi' => 51,
                'nama_kabupaten' => 'KABUPATEN GIANYAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 =>
            array(
                'id_kabupaten' => 5105,
                'id_provinsi' => 51,
                'nama_kabupaten' => 'KABUPATEN KLUNGKUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 =>
            array(
                'id_kabupaten' => 5106,
                'id_provinsi' => 51,
                'nama_kabupaten' => 'KABUPATEN BANGLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 =>
            array(
                'id_kabupaten' => 5107,
                'id_provinsi' => 51,
                'nama_kabupaten' => 'KABUPATEN KARANG ASEM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 =>
            array(
                'id_kabupaten' => 5108,
                'id_provinsi' => 51,
                'nama_kabupaten' => 'KABUPATEN BULELENG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 =>
            array(
                'id_kabupaten' => 5171,
                'id_provinsi' => 51,
                'nama_kabupaten' => 'KOTA DENPASAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 =>
            array(
                'id_kabupaten' => 5201,
                'id_provinsi' => 52,
                'nama_kabupaten' => 'KABUPATEN LOMBOK BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 =>
            array(
                'id_kabupaten' => 5202,
                'id_provinsi' => 52,
                'nama_kabupaten' => 'KABUPATEN LOMBOK TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 =>
            array(
                'id_kabupaten' => 5203,
                'id_provinsi' => 52,
                'nama_kabupaten' => 'KABUPATEN LOMBOK TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 =>
            array(
                'id_kabupaten' => 5204,
                'id_provinsi' => 52,
                'nama_kabupaten' => 'KABUPATEN SUMBAWA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 =>
            array(
                'id_kabupaten' => 5205,
                'id_provinsi' => 52,
                'nama_kabupaten' => 'KABUPATEN DOMPU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 =>
            array(
                'id_kabupaten' => 5206,
                'id_provinsi' => 52,
                'nama_kabupaten' => 'KABUPATEN BIMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 =>
            array(
                'id_kabupaten' => 5207,
                'id_provinsi' => 52,
                'nama_kabupaten' => 'KABUPATEN SUMBAWA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 =>
            array(
                'id_kabupaten' => 5208,
                'id_provinsi' => 52,
                'nama_kabupaten' => 'KABUPATEN LOMBOK UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 =>
            array(
                'id_kabupaten' => 5271,
                'id_provinsi' => 52,
                'nama_kabupaten' => 'KOTA MATARAM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 =>
            array(
                'id_kabupaten' => 5272,
                'id_provinsi' => 52,
                'nama_kabupaten' => 'KOTA BIMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 =>
            array(
                'id_kabupaten' => 5301,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN SUMBA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 =>
            array(
                'id_kabupaten' => 5302,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN SUMBA TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 =>
            array(
                'id_kabupaten' => 5303,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN KUPANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 =>
            array(
                'id_kabupaten' => 5304,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN TIMOR TENGAH SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 =>
            array(
                'id_kabupaten' => 5305,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN TIMOR TENGAH UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 =>
            array(
                'id_kabupaten' => 5306,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN BELU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 =>
            array(
                'id_kabupaten' => 5307,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN ALOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 =>
            array(
                'id_kabupaten' => 5308,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN LEMBATA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 =>
            array(
                'id_kabupaten' => 5309,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN FLORES TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 =>
            array(
                'id_kabupaten' => 5310,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN SIKKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 =>
            array(
                'id_kabupaten' => 5311,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN ENDE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 =>
            array(
                'id_kabupaten' => 5312,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN NGADA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 =>
            array(
                'id_kabupaten' => 5313,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN MANGGARAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 =>
            array(
                'id_kabupaten' => 5314,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN ROTE NDAO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 =>
            array(
                'id_kabupaten' => 5315,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN MANGGARAI BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 =>
            array(
                'id_kabupaten' => 5316,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN SUMBA TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 =>
            array(
                'id_kabupaten' => 5317,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN SUMBA BARAT DAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 =>
            array(
                'id_kabupaten' => 5318,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN NAGEKEO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 =>
            array(
                'id_kabupaten' => 5319,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN MANGGARAI TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 =>
            array(
                'id_kabupaten' => 5320,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN SABU RAIJUA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 =>
            array(
                'id_kabupaten' => 5321,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KABUPATEN MALAKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 =>
            array(
                'id_kabupaten' => 5371,
                'id_provinsi' => 53,
                'nama_kabupaten' => 'KOTA KUPANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 =>
            array(
                'id_kabupaten' => 6101,
                'id_provinsi' => 61,
                'nama_kabupaten' => 'KABUPATEN SAMBAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 =>
            array(
                'id_kabupaten' => 6102,
                'id_provinsi' => 61,
                'nama_kabupaten' => 'KABUPATEN BENGKAYANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 =>
            array(
                'id_kabupaten' => 6103,
                'id_provinsi' => 61,
                'nama_kabupaten' => 'KABUPATEN LANDAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 =>
            array(
                'id_kabupaten' => 6104,
                'id_provinsi' => 61,
                'nama_kabupaten' => 'KABUPATEN MEMPAWAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 =>
            array(
                'id_kabupaten' => 6105,
                'id_provinsi' => 61,
                'nama_kabupaten' => 'KABUPATEN SANGGAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 =>
            array(
                'id_kabupaten' => 6106,
                'id_provinsi' => 61,
                'nama_kabupaten' => 'KABUPATEN KETAPANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 =>
            array(
                'id_kabupaten' => 6107,
                'id_provinsi' => 61,
                'nama_kabupaten' => 'KABUPATEN SINTANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 =>
            array(
                'id_kabupaten' => 6108,
                'id_provinsi' => 61,
                'nama_kabupaten' => 'KABUPATEN KAPUAS HULU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 =>
            array(
                'id_kabupaten' => 6109,
                'id_provinsi' => 61,
                'nama_kabupaten' => 'KABUPATEN SEKADAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 =>
            array(
                'id_kabupaten' => 6110,
                'id_provinsi' => 61,
                'nama_kabupaten' => 'KABUPATEN MELAWI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 =>
            array(
                'id_kabupaten' => 6111,
                'id_provinsi' => 61,
                'nama_kabupaten' => 'KABUPATEN KAYONG UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 =>
            array(
                'id_kabupaten' => 6112,
                'id_provinsi' => 61,
                'nama_kabupaten' => 'KABUPATEN KUBU RAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 =>
            array(
                'id_kabupaten' => 6171,
                'id_provinsi' => 61,
                'nama_kabupaten' => 'KOTA PONTIANAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 =>
            array(
                'id_kabupaten' => 6172,
                'id_provinsi' => 61,
                'nama_kabupaten' => 'KOTA SINGKAWANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 =>
            array(
                'id_kabupaten' => 6201,
                'id_provinsi' => 62,
                'nama_kabupaten' => 'KABUPATEN KOTAWARINGIN BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 =>
            array(
                'id_kabupaten' => 6202,
                'id_provinsi' => 62,
                'nama_kabupaten' => 'KABUPATEN KOTAWARINGIN TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 =>
            array(
                'id_kabupaten' => 6203,
                'id_provinsi' => 62,
                'nama_kabupaten' => 'KABUPATEN KAPUAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 =>
            array(
                'id_kabupaten' => 6204,
                'id_provinsi' => 62,
                'nama_kabupaten' => 'KABUPATEN BARITO SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 =>
            array(
                'id_kabupaten' => 6205,
                'id_provinsi' => 62,
                'nama_kabupaten' => 'KABUPATEN BARITO UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 =>
            array(
                'id_kabupaten' => 6206,
                'id_provinsi' => 62,
                'nama_kabupaten' => 'KABUPATEN SUKAMARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 =>
            array(
                'id_kabupaten' => 6207,
                'id_provinsi' => 62,
                'nama_kabupaten' => 'KABUPATEN LAMANDAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 =>
            array(
                'id_kabupaten' => 6208,
                'id_provinsi' => 62,
                'nama_kabupaten' => 'KABUPATEN SERUYAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 =>
            array(
                'id_kabupaten' => 6209,
                'id_provinsi' => 62,
                'nama_kabupaten' => 'KABUPATEN KATINGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 =>
            array(
                'id_kabupaten' => 6210,
                'id_provinsi' => 62,
                'nama_kabupaten' => 'KABUPATEN PULANG PISAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 =>
            array(
                'id_kabupaten' => 6211,
                'id_provinsi' => 62,
                'nama_kabupaten' => 'KABUPATEN GUNUNG MAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 =>
            array(
                'id_kabupaten' => 6212,
                'id_provinsi' => 62,
                'nama_kabupaten' => 'KABUPATEN BARITO TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 =>
            array(
                'id_kabupaten' => 6213,
                'id_provinsi' => 62,
                'nama_kabupaten' => 'KABUPATEN MURUNG RAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 =>
            array(
                'id_kabupaten' => 6271,
                'id_provinsi' => 62,
                'nama_kabupaten' => 'KOTA PALANGKA RAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 =>
            array(
                'id_kabupaten' => 6301,
                'id_provinsi' => 63,
                'nama_kabupaten' => 'KABUPATEN TANAH LAUT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 =>
            array(
                'id_kabupaten' => 6302,
                'id_provinsi' => 63,
                'nama_kabupaten' => 'KABUPATEN KOTA BARU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 =>
            array(
                'id_kabupaten' => 6303,
                'id_provinsi' => 63,
                'nama_kabupaten' => 'KABUPATEN BANJAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 =>
            array(
                'id_kabupaten' => 6304,
                'id_provinsi' => 63,
                'nama_kabupaten' => 'KABUPATEN BARITO KUALA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 =>
            array(
                'id_kabupaten' => 6305,
                'id_provinsi' => 63,
                'nama_kabupaten' => 'KABUPATEN TAPIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 =>
            array(
                'id_kabupaten' => 6306,
                'id_provinsi' => 63,
                'nama_kabupaten' => 'KABUPATEN HULU SUNGAI SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 =>
            array(
                'id_kabupaten' => 6307,
                'id_provinsi' => 63,
                'nama_kabupaten' => 'KABUPATEN HULU SUNGAI TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 =>
            array(
                'id_kabupaten' => 6308,
                'id_provinsi' => 63,
                'nama_kabupaten' => 'KABUPATEN HULU SUNGAI UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 =>
            array(
                'id_kabupaten' => 6309,
                'id_provinsi' => 63,
                'nama_kabupaten' => 'KABUPATEN TABALONG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 =>
            array(
                'id_kabupaten' => 6310,
                'id_provinsi' => 63,
                'nama_kabupaten' => 'KABUPATEN TANAH BUMBU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 =>
            array(
                'id_kabupaten' => 6311,
                'id_provinsi' => 63,
                'nama_kabupaten' => 'KABUPATEN BALANGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 =>
            array(
                'id_kabupaten' => 6371,
                'id_provinsi' => 63,
                'nama_kabupaten' => 'KOTA BANJARMASIN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 =>
            array(
                'id_kabupaten' => 6372,
                'id_provinsi' => 63,
                'nama_kabupaten' => 'KOTA BANJAR BARU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 =>
            array(
                'id_kabupaten' => 6401,
                'id_provinsi' => 64,
                'nama_kabupaten' => 'KABUPATEN PASER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 =>
            array(
                'id_kabupaten' => 6402,
                'id_provinsi' => 64,
                'nama_kabupaten' => 'KABUPATEN KUTAI BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 =>
            array(
                'id_kabupaten' => 6403,
                'id_provinsi' => 64,
                'nama_kabupaten' => 'KABUPATEN KUTAI KARTANEGARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 =>
            array(
                'id_kabupaten' => 6404,
                'id_provinsi' => 64,
                'nama_kabupaten' => 'KABUPATEN KUTAI TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 =>
            array(
                'id_kabupaten' => 6405,
                'id_provinsi' => 64,
                'nama_kabupaten' => 'KABUPATEN BERAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 =>
            array(
                'id_kabupaten' => 6409,
                'id_provinsi' => 64,
                'nama_kabupaten' => 'KABUPATEN PENAJAM PASER UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 =>
            array(
                'id_kabupaten' => 6411,
                'id_provinsi' => 64,
                'nama_kabupaten' => 'KABUPATEN MAHAKAM HULU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 =>
            array(
                'id_kabupaten' => 6471,
                'id_provinsi' => 64,
                'nama_kabupaten' => 'KOTA BALIKPAPAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 =>
            array(
                'id_kabupaten' => 6472,
                'id_provinsi' => 64,
                'nama_kabupaten' => 'KOTA SAMARINDA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 =>
            array(
                'id_kabupaten' => 6474,
                'id_provinsi' => 64,
                'nama_kabupaten' => 'KOTA BONTANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 =>
            array(
                'id_kabupaten' => 6501,
                'id_provinsi' => 65,
                'nama_kabupaten' => 'KABUPATEN MALINAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 =>
            array(
                'id_kabupaten' => 6502,
                'id_provinsi' => 65,
                'nama_kabupaten' => 'KABUPATEN BULUNGAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 =>
            array(
                'id_kabupaten' => 6503,
                'id_provinsi' => 65,
                'nama_kabupaten' => 'KABUPATEN TANA TIDUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 =>
            array(
                'id_kabupaten' => 6504,
                'id_provinsi' => 65,
                'nama_kabupaten' => 'KABUPATEN NUNUKAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 =>
            array(
                'id_kabupaten' => 6571,
                'id_provinsi' => 65,
                'nama_kabupaten' => 'KOTA TARAKAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 =>
            array(
                'id_kabupaten' => 7101,
                'id_provinsi' => 71,
                'nama_kabupaten' => 'KABUPATEN BOLAANG MONGONDOW',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 =>
            array(
                'id_kabupaten' => 7102,
                'id_provinsi' => 71,
                'nama_kabupaten' => 'KABUPATEN MINAHASA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 =>
            array(
                'id_kabupaten' => 7103,
                'id_provinsi' => 71,
                'nama_kabupaten' => 'KABUPATEN KEPULAUAN SANGIHE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 =>
            array(
                'id_kabupaten' => 7104,
                'id_provinsi' => 71,
                'nama_kabupaten' => 'KABUPATEN KEPULAUAN TALAUD',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 =>
            array(
                'id_kabupaten' => 7105,
                'id_provinsi' => 71,
                'nama_kabupaten' => 'KABUPATEN MINAHASA SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 =>
            array(
                'id_kabupaten' => 7106,
                'id_provinsi' => 71,
                'nama_kabupaten' => 'KABUPATEN MINAHASA UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 =>
            array(
                'id_kabupaten' => 7107,
                'id_provinsi' => 71,
                'nama_kabupaten' => 'KABUPATEN BOLAANG MONGONDOW UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 =>
            array(
                'id_kabupaten' => 7108,
                'id_provinsi' => 71,
                'nama_kabupaten' => 'KABUPATEN SIAU TAGULANDANG BIARO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 =>
            array(
                'id_kabupaten' => 7109,
                'id_provinsi' => 71,
                'nama_kabupaten' => 'KABUPATEN MINAHASA TENGGARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 =>
            array(
                'id_kabupaten' => 7110,
                'id_provinsi' => 71,
                'nama_kabupaten' => 'KABUPATEN BOLAANG MONGONDOW SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 =>
            array(
                'id_kabupaten' => 7111,
                'id_provinsi' => 71,
                'nama_kabupaten' => 'KABUPATEN BOLAANG MONGONDOW TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 =>
            array(
                'id_kabupaten' => 7171,
                'id_provinsi' => 71,
                'nama_kabupaten' => 'KOTA MANADO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 =>
            array(
                'id_kabupaten' => 7172,
                'id_provinsi' => 71,
                'nama_kabupaten' => 'KOTA BITUNG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 =>
            array(
                'id_kabupaten' => 7173,
                'id_provinsi' => 71,
                'nama_kabupaten' => 'KOTA TOMOHON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 =>
            array(
                'id_kabupaten' => 7174,
                'id_provinsi' => 71,
                'nama_kabupaten' => 'KOTA KOTAMOBAGU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 =>
            array(
                'id_kabupaten' => 7201,
                'id_provinsi' => 72,
                'nama_kabupaten' => 'KABUPATEN BANGGAI KEPULAUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 =>
            array(
                'id_kabupaten' => 7202,
                'id_provinsi' => 72,
                'nama_kabupaten' => 'KABUPATEN BANGGAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 =>
            array(
                'id_kabupaten' => 7203,
                'id_provinsi' => 72,
                'nama_kabupaten' => 'KABUPATEN MOROWALI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 =>
            array(
                'id_kabupaten' => 7204,
                'id_provinsi' => 72,
                'nama_kabupaten' => 'KABUPATEN POSO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 =>
            array(
                'id_kabupaten' => 7205,
                'id_provinsi' => 72,
                'nama_kabupaten' => 'KABUPATEN DONGGALA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 =>
            array(
                'id_kabupaten' => 7206,
                'id_provinsi' => 72,
                'nama_kabupaten' => 'KABUPATEN TOLI-TOLI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 =>
            array(
                'id_kabupaten' => 7207,
                'id_provinsi' => 72,
                'nama_kabupaten' => 'KABUPATEN BUOL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 =>
            array(
                'id_kabupaten' => 7208,
                'id_provinsi' => 72,
                'nama_kabupaten' => 'KABUPATEN PARIGI MOUTONG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 =>
            array(
                'id_kabupaten' => 7209,
                'id_provinsi' => 72,
                'nama_kabupaten' => 'KABUPATEN TOJO UNA-UNA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 =>
            array(
                'id_kabupaten' => 7210,
                'id_provinsi' => 72,
                'nama_kabupaten' => 'KABUPATEN SIGI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 =>
            array(
                'id_kabupaten' => 7211,
                'id_provinsi' => 72,
                'nama_kabupaten' => 'KABUPATEN BANGGAI LAUT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 =>
            array(
                'id_kabupaten' => 7212,
                'id_provinsi' => 72,
                'nama_kabupaten' => 'KABUPATEN MOROWALI UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 =>
            array(
                'id_kabupaten' => 7271,
                'id_provinsi' => 72,
                'nama_kabupaten' => 'KOTA PALU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 =>
            array(
                'id_kabupaten' => 7301,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN KEPULAUAN SELAYAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 =>
            array(
                'id_kabupaten' => 7302,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN BULUKUMBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 =>
            array(
                'id_kabupaten' => 7303,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN BANTAENG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 =>
            array(
                'id_kabupaten' => 7304,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN JENEPONTO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 =>
            array(
                'id_kabupaten' => 7305,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN TAKALAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 =>
            array(
                'id_kabupaten' => 7306,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN GOWA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 =>
            array(
                'id_kabupaten' => 7307,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN SINJAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 =>
            array(
                'id_kabupaten' => 7308,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN MAROS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 =>
            array(
                'id_kabupaten' => 7309,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN PANGKAJENE DAN KEPULAUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 =>
            array(
                'id_kabupaten' => 7310,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN BARRU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 =>
            array(
                'id_kabupaten' => 7311,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN BONE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 =>
            array(
                'id_kabupaten' => 7312,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN SOPPENG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 =>
            array(
                'id_kabupaten' => 7313,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN WAJO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 =>
            array(
                'id_kabupaten' => 7314,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN SIDENRENG RAPPANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 =>
            array(
                'id_kabupaten' => 7315,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN PINRANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 =>
            array(
                'id_kabupaten' => 7316,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN ENREKANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 =>
            array(
                'id_kabupaten' => 7317,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN LUWU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 =>
            array(
                'id_kabupaten' => 7318,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN TANA TORAJA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 =>
            array(
                'id_kabupaten' => 7322,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN LUWU UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 =>
            array(
                'id_kabupaten' => 7325,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN LUWU TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 =>
            array(
                'id_kabupaten' => 7326,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KABUPATEN TORAJA UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 =>
            array(
                'id_kabupaten' => 7371,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KOTA MAKASSAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 =>
            array(
                'id_kabupaten' => 7372,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KOTA PAREPARE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 =>
            array(
                'id_kabupaten' => 7373,
                'id_provinsi' => 73,
                'nama_kabupaten' => 'KOTA PALOPO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 =>
            array(
                'id_kabupaten' => 7401,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KABUPATEN BUTON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 =>
            array(
                'id_kabupaten' => 7402,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KABUPATEN MUNA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 =>
            array(
                'id_kabupaten' => 7403,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KABUPATEN KONAWE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 =>
            array(
                'id_kabupaten' => 7404,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KABUPATEN KOLAKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 =>
            array(
                'id_kabupaten' => 7405,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KABUPATEN KONAWE SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 =>
            array(
                'id_kabupaten' => 7406,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KABUPATEN BOMBANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 =>
            array(
                'id_kabupaten' => 7407,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KABUPATEN WAKATOBI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 =>
            array(
                'id_kabupaten' => 7408,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KABUPATEN KOLAKA UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 =>
            array(
                'id_kabupaten' => 7409,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KABUPATEN BUTON UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 =>
            array(
                'id_kabupaten' => 7410,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KABUPATEN KONAWE UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 =>
            array(
                'id_kabupaten' => 7411,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KABUPATEN KOLAKA TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 =>
            array(
                'id_kabupaten' => 7412,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KABUPATEN KONAWE KEPULAUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 =>
            array(
                'id_kabupaten' => 7413,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KABUPATEN MUNA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 =>
            array(
                'id_kabupaten' => 7414,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KABUPATEN BUTON TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 =>
            array(
                'id_kabupaten' => 7415,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KABUPATEN BUTON SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 =>
            array(
                'id_kabupaten' => 7471,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KOTA KENDARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 =>
            array(
                'id_kabupaten' => 7472,
                'id_provinsi' => 74,
                'nama_kabupaten' => 'KOTA BAUBAU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 =>
            array(
                'id_kabupaten' => 7501,
                'id_provinsi' => 75,
                'nama_kabupaten' => 'KABUPATEN BOALEMO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 =>
            array(
                'id_kabupaten' => 7502,
                'id_provinsi' => 75,
                'nama_kabupaten' => 'KABUPATEN GORONTALO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 =>
            array(
                'id_kabupaten' => 7503,
                'id_provinsi' => 75,
                'nama_kabupaten' => 'KABUPATEN POHUWATO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 =>
            array(
                'id_kabupaten' => 7504,
                'id_provinsi' => 75,
                'nama_kabupaten' => 'KABUPATEN BONE BOLANGO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 =>
            array(
                'id_kabupaten' => 7505,
                'id_provinsi' => 75,
                'nama_kabupaten' => 'KABUPATEN GORONTALO UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 =>
            array(
                'id_kabupaten' => 7571,
                'id_provinsi' => 75,
                'nama_kabupaten' => 'KOTA GORONTALO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 =>
            array(
                'id_kabupaten' => 7601,
                'id_provinsi' => 76,
                'nama_kabupaten' => 'KABUPATEN MAJENE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 =>
            array(
                'id_kabupaten' => 7602,
                'id_provinsi' => 76,
                'nama_kabupaten' => 'KABUPATEN POLEWALI MANDAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 =>
            array(
                'id_kabupaten' => 7603,
                'id_provinsi' => 76,
                'nama_kabupaten' => 'KABUPATEN MAMASA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 =>
            array(
                'id_kabupaten' => 7604,
                'id_provinsi' => 76,
                'nama_kabupaten' => 'KABUPATEN MAMUJU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 =>
            array(
                'id_kabupaten' => 7605,
                'id_provinsi' => 76,
                'nama_kabupaten' => 'KABUPATEN MAMUJU UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 =>
            array(
                'id_kabupaten' => 7606,
                'id_provinsi' => 76,
                'nama_kabupaten' => 'KABUPATEN MAMUJU TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 =>
            array(
                'id_kabupaten' => 8101,
                'id_provinsi' => 81,
                'nama_kabupaten' => 'KABUPATEN MALUKU TENGGARA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 =>
            array(
                'id_kabupaten' => 8102,
                'id_provinsi' => 81,
                'nama_kabupaten' => 'KABUPATEN MALUKU TENGGARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 =>
            array(
                'id_kabupaten' => 8103,
                'id_provinsi' => 81,
                'nama_kabupaten' => 'KABUPATEN MALUKU TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 =>
            array(
                'id_kabupaten' => 8104,
                'id_provinsi' => 81,
                'nama_kabupaten' => 'KABUPATEN BURU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 =>
            array(
                'id_kabupaten' => 8105,
                'id_provinsi' => 81,
                'nama_kabupaten' => 'KABUPATEN KEPULAUAN ARU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 =>
            array(
                'id_kabupaten' => 8106,
                'id_provinsi' => 81,
                'nama_kabupaten' => 'KABUPATEN SERAM BAGIAN BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 =>
            array(
                'id_kabupaten' => 8107,
                'id_provinsi' => 81,
                'nama_kabupaten' => 'KABUPATEN SERAM BAGIAN TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 =>
            array(
                'id_kabupaten' => 8108,
                'id_provinsi' => 81,
                'nama_kabupaten' => 'KABUPATEN MALUKU BARAT DAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 =>
            array(
                'id_kabupaten' => 8109,
                'id_provinsi' => 81,
                'nama_kabupaten' => 'KABUPATEN BURU SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 =>
            array(
                'id_kabupaten' => 8171,
                'id_provinsi' => 81,
                'nama_kabupaten' => 'KOTA AMBON',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 =>
            array(
                'id_kabupaten' => 8172,
                'id_provinsi' => 81,
                'nama_kabupaten' => 'KOTA TUAL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 =>
            array(
                'id_kabupaten' => 8201,
                'id_provinsi' => 82,
                'nama_kabupaten' => 'KABUPATEN HALMAHERA BARAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 =>
            array(
                'id_kabupaten' => 8202,
                'id_provinsi' => 82,
                'nama_kabupaten' => 'KABUPATEN HALMAHERA TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 =>
            array(
                'id_kabupaten' => 8203,
                'id_provinsi' => 82,
                'nama_kabupaten' => 'KABUPATEN KEPULAUAN SULA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 =>
            array(
                'id_kabupaten' => 8204,
                'id_provinsi' => 82,
                'nama_kabupaten' => 'KABUPATEN HALMAHERA SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 =>
            array(
                'id_kabupaten' => 8205,
                'id_provinsi' => 82,
                'nama_kabupaten' => 'KABUPATEN HALMAHERA UTARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 =>
            array(
                'id_kabupaten' => 8206,
                'id_provinsi' => 82,
                'nama_kabupaten' => 'KABUPATEN HALMAHERA TIMUR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 =>
            array(
                'id_kabupaten' => 8207,
                'id_provinsi' => 82,
                'nama_kabupaten' => 'KABUPATEN PULAU MOROTAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 =>
            array(
                'id_kabupaten' => 8208,
                'id_provinsi' => 82,
                'nama_kabupaten' => 'KABUPATEN PULAU TALIABU',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 =>
            array(
                'id_kabupaten' => 8271,
                'id_provinsi' => 82,
                'nama_kabupaten' => 'KOTA TERNATE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 =>
            array(
                'id_kabupaten' => 8272,
                'id_provinsi' => 82,
                'nama_kabupaten' => 'KOTA TIDORE KEPULAUAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 =>
            array(
                'id_kabupaten' => 9101,
                'id_provinsi' => 91,
                'nama_kabupaten' => 'KABUPATEN FAKFAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 =>
            array(
                'id_kabupaten' => 9102,
                'id_provinsi' => 91,
                'nama_kabupaten' => 'KABUPATEN KAIMANA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 =>
            array(
                'id_kabupaten' => 9103,
                'id_provinsi' => 91,
                'nama_kabupaten' => 'KABUPATEN TELUK WONDAMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 =>
            array(
                'id_kabupaten' => 9104,
                'id_provinsi' => 91,
                'nama_kabupaten' => 'KABUPATEN TELUK BINTUNI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 =>
            array(
                'id_kabupaten' => 9105,
                'id_provinsi' => 91,
                'nama_kabupaten' => 'KABUPATEN MANOKWARI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 =>
            array(
                'id_kabupaten' => 9106,
                'id_provinsi' => 91,
                'nama_kabupaten' => 'KABUPATEN SORONG SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 =>
            array(
                'id_kabupaten' => 9107,
                'id_provinsi' => 91,
                'nama_kabupaten' => 'KABUPATEN SORONG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 =>
            array(
                'id_kabupaten' => 9108,
                'id_provinsi' => 91,
                'nama_kabupaten' => 'KABUPATEN RAJA AMPAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 =>
            array(
                'id_kabupaten' => 9109,
                'id_provinsi' => 91,
                'nama_kabupaten' => 'KABUPATEN TAMBRAUW',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 =>
            array(
                'id_kabupaten' => 9110,
                'id_provinsi' => 91,
                'nama_kabupaten' => 'KABUPATEN MAYBRAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 =>
            array(
                'id_kabupaten' => 9111,
                'id_provinsi' => 91,
                'nama_kabupaten' => 'KABUPATEN MANOKWARI SELATAN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 =>
            array(
                'id_kabupaten' => 9112,
                'id_provinsi' => 91,
                'nama_kabupaten' => 'KABUPATEN PEGUNUNGAN ARFAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 =>
            array(
                'id_kabupaten' => 9171,
                'id_provinsi' => 91,
                'nama_kabupaten' => 'KOTA SORONG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 =>
            array(
                'id_kabupaten' => 9401,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN MERAUKE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 =>
            array(
                'id_kabupaten' => 9402,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN JAYAWIJAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 =>
            array(
                'id_kabupaten' => 9403,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN JAYAPURA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 =>
            array(
                'id_kabupaten' => 9404,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN NABIRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 =>
            array(
                'id_kabupaten' => 9408,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN KEPULAUAN YAPEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 =>
            array(
                'id_kabupaten' => 9409,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN BIAK NUMFOR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 =>
            array(
                'id_kabupaten' => 9410,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN PANIAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 =>
            array(
                'id_kabupaten' => 9411,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN PUNCAK JAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 =>
            array(
                'id_kabupaten' => 9412,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN MIMIKA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 =>
            array(
                'id_kabupaten' => 9413,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN BOVEN DIGOEL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 =>
            array(
                'id_kabupaten' => 9414,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN MAPPI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 =>
            array(
                'id_kabupaten' => 9415,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN ASMAT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 =>
            array(
                'id_kabupaten' => 9416,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN YAHUKIMO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 =>
            array(
                'id_kabupaten' => 9417,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN PEGUNUNGAN BINTANG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 =>
            array(
                'id_kabupaten' => 9418,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN TOLIKARA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        DB::table('kabupatens')->insert(array(
            0 =>
            array(
                'id_kabupaten' => 9419,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN SARMI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id_kabupaten' => 9420,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN KEEROM',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id_kabupaten' => 9426,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN WAROPEN',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'id_kabupaten' => 9427,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN SUPIORI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array(
                'id_kabupaten' => 9428,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN MAMBERAMO RAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array(
                'id_kabupaten' => 9429,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN NDUGA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array(
                'id_kabupaten' => 9430,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN LANNY JAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array(
                'id_kabupaten' => 9431,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN MAMBERAMO TENGAH',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array(
                'id_kabupaten' => 9432,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN YALIMO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array(
                'id_kabupaten' => 9433,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN PUNCAK',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array(
                'id_kabupaten' => 9434,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN DOGIYAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array(
                'id_kabupaten' => 9435,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN INTAN JAYA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array(
                'id_kabupaten' => 9436,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KABUPATEN DEIYAI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array(
                'id_kabupaten' => 9471,
                'id_provinsi' => 94,
                'nama_kabupaten' => 'KOTA JAYAPURA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
