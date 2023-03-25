<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sponsorships')->insert([
            [
                'name'=>'PLN',
                'picture'=>'PLN.png',
                'type'=>'SPONSOR',
                'size'=>'LARGE',
            ],
            [
                'name'=>'MANDIRI',
                'picture'=>'MANDIRI.png',
                'type'=>'SPONSOR',
                'size'=>'LARGE',
            ],
            [
                'name'=>'PAKALOLO',
                'picture'=>'PAKALOLO.jpeg',
                'type'=>'SPONSOR',
                'size'=>'MEDIUM',
            ],
            [
                'name'=>'PETROKIMIA',
                'picture'=>'PETROKIMIA.png',
                'type'=>'SPONSOR',
                'size'=>'MEDIUM',
            ],
            [
                'name'=>'SOMETHINC',
                'picture'=>'SOMETHINC.png',
                'type'=>'SPONSOR',
                'size'=>'MEDIUM',
            ],
            [
                'name'=>'BNI',
                'picture'=>'BNI.png',
                'type'=>'SPONSOR',
                'size'=>'MEDIUM',
            ],
            [
                'name'=>'BY.U',
                'picture'=>'BY.U.png',
                'type'=>'SPONSOR',
                'size'=>'SMALL',
            ],
            [
                'name'=>'AJAIB',
                'picture'=>'AJAIB.png',
                'type'=>'SPONSOR',
                'size'=>'SMALL',
            ],
            [
                'name'=>'TANAMDUIT',
                'picture'=>'TANAMDUIT.png',
                'type'=>'SPONSOR',
                'size'=>'SMALL',
            ],
            [
                'name'=>'ZOYA',
                'picture'=>'ZOYA.png',
                'type'=>'SPONSOR',
                'size'=>'SMALL',
            ],
            //TAMBAHAN SPONSOR
            [
                'name'=>'PT PERTAMINA TRANSKONTINENTAL',
                'picture'=>'PT-PERTAMINA-TRANSKONTINENTAL.PNG',
                'type'=>'SPONSOR',
                'size'=>'LARGE',
            ],
            [
                'name'=>'ARNA',
                'picture'=>'ARNA.png',
                'type'=>'SPONSOR',
                'size'=>'MEDIUM',
            ],
            [
                'name'=>'INDOFOOD',
                'picture'=>'INDOFOOD.PNG',
                'type'=>'SPONSOR',
                'size'=>'MEDIUM',
            ],
            [
                'name'=>'PRUDENTIAL',
                'picture'=>'PRUDENTIAL.PNG',
                'type'=>'SPONSOR',
                'size'=>'MEDIUM',
            ],
            [
                'name'=>'DANONE',
                'picture'=>'DANONE.png',
                'type'=>'SPONSOR',
                'size'=>'MEDIUM',
            ],
            [
                'name'=>'PUPUK INDONESIA',
                'picture'=>'PUPUK-INDONESIA.png',
                'type'=>'SPONSOR',
                'size'=>'MEDIUM',
            ],
            //END TAMBAHAN SPONSOR
            [
                'name'=>'KLHK',
                'picture'=>'KLHK.png',
                'type'=>'SUPPORTED',
                'size'=>'EXTRA_LARGE',
            ],
            [
                'name'=>'CNN',
                'picture'=>'CNN.PNG',
                'type'=>'SUPPORTED',
                'size'=>'EXTRA_LARGE',
            ],
            [
                'name'=>'ASEAN',
                'picture'=>'ASEAN.png',
                'type'=>'SUPPORTED',
                'size'=>'EXTRA_LARGE',
            ],
            //TAMBAHAN SUPPORTED BY
            [
                'name'=>'Kemenko Marves',
                'picture'=>'Kemenko-Marves.PNG',
                'type'=>'SUPPORTED',
                'size'=>'EXTRA_LARGE',
            ],
            //END TAMBAHAN SUPPORTED BY
            [
                'name'=>'HIPWEE',
                'picture'=>'HIPWEE.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'MEDIUM',
            ],
            [
                'name'=>'PIKIRAN RAKYAT',
                'picture'=>'PIKIRAN RAKYAT.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'MEDIUM',
            ],
            [
                'name'=>'TRANS7',
                'picture'=>'TRANS7.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'MEDIUM',
            ],
            [
                'name'=>'DETIK.COM',
                'picture'=>'DETIKCOM.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'Radio Citra Mega Swara Bogor',
                'picture'=>'Radio Citra Mega Swara Bogor.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'UMNRadio',
                'picture'=>'UMNRadio.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'Aiesec Bandung',
                'picture'=>'Aiesec Bandung.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'Aiesec Unpad',
                'picture'=>'Aiesec Unpad.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'OpportuNest',
                'picture'=>'OpportuNest.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'IO UNPAD',
                'picture'=>'IO_UNPAD.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            // TAMBAHAN MEDIA PARTNER
            [
                'name'=>'NET TV',
                'picture'=>'NET-TV.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'LARGE',
            ],
            [
                'name'=>'CNN Indonesia',
                'picture'=>'CNN.PNG',
                'type'=>'MEDIA PARTNER',
                'size'=>'LARGE',
            ],
            //Medpart PPRF
            [
                'name'=>'GNFI',
                'picture'=>'GNFI.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'MI',
                'picture'=>'MI.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'RAKA',
                'picture'=>'RAKA.jpg',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'sonora',
                'picture'=>'sonora.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'Tempo',
                'picture'=>'Tempo.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'Metro TV',
                'picture'=>'Metrotv.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'iNews',
                'picture'=>'iNews.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'Medcom',
                'picture'=>'Medcom.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'Okezone',
                'picture'=>'Okezone.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'Sindonews',
                'picture'=>'Sindonews.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            //End Medpart PPRF
            //Medpart Remind
            [
                'name'=>'Warta Event',
                'picture'=>'wartaevent.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'Hima Ilkom Telkom',
                'picture'=>'himakom-telkom.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'Himaikom UPNVJ',
                'picture'=>'Himaikom UPNVJ.jpg',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'eventcampus',
                'picture'=>'eventcampus.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'BEM Fikom',
                'picture'=>'BEM Fikom.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'HIMAKOM UNS',
                'picture'=>'HIMAKOM UNS.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'FUN Radio',
                'picture'=>'FUN Radio.jpg',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'HIMAKOM UPNYK',
                'picture'=>'HIMAKOM UPNYK.png',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'Hima Unbraw (Channel 11)',
                'picture'=>'Hima Unbraw (Channel 11).jpg',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
            [
                'name'=>'Hima Ilkom Unair',
                'picture'=>'Hima Ilkom Unair.jpg',
                'type'=>'MEDIA PARTNER',
                'size'=>'SMALL',
            ],
        ]);
    }
}
