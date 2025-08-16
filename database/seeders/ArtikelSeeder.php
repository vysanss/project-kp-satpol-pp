use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArtikelSeeder extends Seeder
{
    public function run()
    {
        $articles = [
            ['title' => 'Peran Satpol PP dalam Menjaga Ketertiban Umum', 'category' => 'Edukasi', 'excerpt' => 'Memahami tugas dan fungsi Satpol PP dalam menjaga ketertiban dan keamanan di lingkungan masyarakat.'],
            ['title' => 'Tips Edukasi Hukum untuk Warga Kota', 'category' => 'Tips', 'excerpt' => 'Pentingnya edukasi hukum agar masyarakat lebih sadar akan aturan dan peraturan daerah.'],
            ['title' => 'Analisis Penegakan Perda di Era Digital', 'category' => 'Analisa', 'excerpt' => 'Bagaimana teknologi membantu penegakan Peraturan Daerah di era modern.'],
            ['title' => 'Kolaborasi Satpol PP dengan Instansi Lain', 'category' => 'Opini', 'excerpt' => 'Pentingnya sinergi Satpol PP dengan berbagai instansi untuk pelayanan publik yang lebih baik.'],
            ['title' => 'Strategi Sosialisasi Perda yang Efektif', 'category' => 'Tips', 'excerpt' => 'Metode-metode efektif dalam menyosialisasikan Peraturan Daerah kepada masyarakat.'],
            ['title' => 'Penanganan PKL yang Humanis dan Berkeadilan', 'category' => 'Edukasi', 'excerpt' => 'Pendekatan humanis dalam penanganan Pedagang Kaki Lima demi terciptanya keharmonisan.'],
            ['title' => 'Transformasi Digital Satpol PP Tasikmalaya', 'category' => 'Analisa', 'excerpt' => 'Analisis perubahan dan inovasi dalam pelayanan Satpol PP di era digitalisasi.'],
            ['title' => 'Membangun Kesadaran Hukum Masyarakat', 'category' => 'Opini', 'excerpt' => 'Pentingnya membangun kesadaran hukum sejak dini untuk menciptakan masyarakat yang tertib.'],
            ['title' => 'Panduan Melaporkan Pelanggaran Perda', 'category' => 'Tips', 'excerpt' => 'Langkah-langkah yang dapat dilakukan masyarakat untuk melaporkan pelanggaran Peraturan Daerah.']
        ];

        foreach ($articles as $i => $article) {
            DB::table('artikel')->insert([
                'title' => $article['title'],
                'category' => $article['category'],
                'excerpt' => $article['excerpt'],
                'image' => 'img/placeholder-news.jpg',
                'published_at' => Carbon::now()->subDays($i + 1)->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
