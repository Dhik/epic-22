<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JudgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('judges')->insert([
            [
                'picture'=>'1-1.jpg',
                'name'=>'Dandi Supriadi, M.A. (SUT), PhD',
                'occupation'=>'Kepala Kantor Komunikasi Publik, Dosen Jurnalistik FIKOM UNPAD',
                'institution'=>'Universitas Padjadjaran',
                'type'=>'Academic Judge',
                'competition_id'=> 1
            ],
            [
                'picture'=>'1-2.jpg',
                'name'=>'Benita Nathania',
                'occupation'=>'Research Analyst, Sustainable Commodities and Business',
                'institution'=>'WRI Indonesia',
                'type'=>'Environmentalist Judge',
                'competition_id'=> 1
            ],
            [
                'picture'=>'1-3.jpg',
                'name'=>'Filda Rahmiati',
                'occupation'=>'Dosen International Business',
                'institution'=>' President University',
                'type'=>'Creative Communication Strategy Judge',
                'competition_id'=>1
            ],
            [
                'picture'=>'2-1.jpg',
                'name'=>'Aliya Alifadrianti',
                'occupation'=>'Senior Associate',
                'institution'=>'Maverick',
                'type'=>null,
                'competition_id'=>2
            ],
            [
                'picture'=>'2-2.jpg',
                'name'=>'Enggar Paramitha',
                'occupation'=>'Strategic Communications and Research Consultant',
                'institution'=>'Development Dialogue Asia (DDA)',
                'type'=>null,
                'competition_id'=>2
            ],
            [
                'picture'=>'2-3.jpg',
                'name'=>'Yulianti Dewi',
                'occupation'=>'Lecturer',
                'institution'=>'Universitas Padjadjaran',
                'type'=>null,
                'competition_id'=>2
            ],
            [
                'picture'=>'2-4.jpg',
                'name'=>'Gabriela C. Kalalo',
                'occupation'=>'Communicator Coordinator',
                'institution'=>'Coaction',
                'type'=>null,
                'competition_id'=>2
            ],
            [
                'picture'=>'3-1.png',
                'name'=>'Rasyid Baihaqi',
                'occupation'=>'Filmmaker',
                'institution'=>'Vokraf',
                'type'=>'Juri Cinematography',
                'competition_id'=>3
            ],
            [
                'picture'=>'3-2.png',
                'name'=>'Swastika Nohara',
                'occupation'=>'Associate Lecturer, Scriptwriter for movies, television and documentaries',
                'institution'=>'BINUS University',
                'type'=>'Juri Screenplay',
                'competition_id'=>3
            ],
            [
                'picture'=>'4-1.jpg',
                'name'=>'Anggung Suherman',
                'occupation'=>'Manager & Musisi',
                'institution'=>'Bottlesmoker',
                'type'=>'Juri Audio',
                'competition_id'=>4
            ],
            [
                'picture'=>'4-2.jpg',
                'name'=>'Ephraim Tan',
                'occupation'=>'Art Director & Animator',                
                'institution'=>'Seeds Motion',
                'type'=>'Juri poster digital',
                'competition_id'=>4
            ],
            [
                'picture'=>'4-3.jpg',
                'name'=>'Panji Lambang Suharto',
                'occupation'=>'Editor',
                'institution'=>'MNC Pictures',
                'type'=>'Juri video',
                'competition_id'=>4
            ],
            [
                'picture'=>'4-4.jpg',
                'name'=>'Adora Beata Bethari',
                'occupation'=>'Ketua Program Plastavfall Solution',
                'institution'=>'Plastavfall Solution',
                'type'=>'Juri materi',
                'competition_id'=>4
            ],
            [
                'picture'=>'5-1.jpg',
                'name'=>'Samson CMS., S.Sos., M.I.Kom',
                'occupation'=>'Dosen Fakultas Ilmu Komunikasi',
                'institution'=>'Universitas Padjadjaran',
                'type'=>null,
                'competition_id'=>5
            ],
            [
                'picture'=>'5-2.jpg',
                'name'=>'Robi Andoyo, STP.,M.Sc., Ph.D',
                'occupation'=>'Dosen Fakultas Teknologi Industri Pertanian',
                'institution'=>'Universitas Padjadjaran',
                'type'=>null,
                'competition_id'=>5
            ],
            [
                'picture'=>'5-3.jpg',
                'name'=>'Siti Chaerani Djen Amar, MA., Ph.D',
                'occupation'=>'Dosen Fakultas Ilmu Komunikasi',
                'institution'=>'Universitas Padjadjaran',
                'type'=>null,
                'competition_id'=>5
            ],
            [
                'picture'=>'6-1.jpeg',
                'name'=>'Justito Adiprasetio S. Ikom, M.A',
                'occupation'=>'Journalism Lecturer',
                'institution'=>'Universitas Padjadjaran',
                'type'=>null,
                'competition_id'=>6
            ],
            [
                'picture'=>'6-2.JPG',
                'name'=>'Dyna Rochmyaningsih',
                'occupation'=>'Executive director at society',
                'institution'=>'Indonesian Science Journalist',
                'type'=>null,
                'competition_id'=>6
            ],
            [
                'picture'=>'6-3.jpg',
                'name'=>'Nabiha Shahab',
                'occupation'=>'Media Coordinator V20 Group/Founder',
                'institution'=>'tanahAir.net',
                'type'=>null,
                'competition_id'=>6
            ],
            [
                'picture'=>'7-1-1.jpeg',
                'name'=>'Renata Anisa, S.Sos., M.M',
                'occupation'=>'Dosen Prodi Hubungan Masyarakat',
                'institution'=>'Universitas Padjadjaran',
                'type'=>'OlymPRday: Akademisi',
                'competition_id'=>7
            ],
            [
                'picture'=>'7-1-2.jpg',
                'name'=>'Aditya Rizki Pramudita',
                'occupation'=>'Penyusun Bahan Kebijakan',
                'institution'=>'Kemenko Marves',
                'type'=>'OlymPRday: Kementerian',
                'competition_id'=>7
            ],
            [
                'picture'=>'7-1-3.jpg',
                'name'=>'Silviana Chandra',
                'occupation'=>'Senior Campaign Executive',
                'institution'=>'Waste4Change',
                'type'=>'OlymPRday: Waste Management Company',
                'competition_id'=> 7
            ],
            [
                'picture'=>'7-1-4.jpg',
                'name'=>'Dandy Widiarko',
                'occupation'=>'Strategic Planner at Zeno Stratcom Indonesia',
                'institution'=>'Zeno Group',
                'type'=>'OlymPRday: PR Agency',
                'competition_id'=>7
            ],
            [
                'picture'=>'7-2-1.jpg',
                'name'=>'R. Yunita Prima P, S.Sos, MC-GMComm',
                'occupation'=>'Dosen Prodi Hubungan Masyarakat',
                'institution'=>'Universitas Padjadjaran',
                'type'=>'PRSF: Akademisi',
                'competition_id'=>7
            ],
            [
                'picture'=>'7-2-2.jpg',
                'name'=>'Makna Fathana Sabila',
                'occupation'=>'Analis Kebijakan Ahli Pertama',
                'institution'=>'Kemenko Marves',
                'type'=>'PRSF: Kementerian',
                'competition_id'=>7
            ],
            [
                'picture'=>'7-2-3.jpeg',
                'name'=>'Hecka Athaya Shabrina',
                'occupation'=>'Employer Branding Staff',
                'institution'=>'Danone Indonesia',
                'type'=>'PRSF: Alumni',
                'competition_id'=>7
            ],
        ]);
    }
}
