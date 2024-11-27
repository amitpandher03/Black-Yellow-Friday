<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create(['name' => 'Electronics']);
        Category::create(['name' => 'Home & Kitchen']);
        Category::create(['name' => 'Gaming']);
        Category::create(['name' => 'Fashion']);
        Category::create(['name' => 'Smart Home']);
        Category::create(['name' => 'TV & Audio']);
        Category::create(['name' => 'Toys & Games']);
        Category::create(['name' => 'Beauty & Personal Care']);

        User::create([
            'name' => 'Amit',
            'email' => 'amit@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $images = [
            [
                'name' => 'Samsung 65" 4K Smart TV',
                'image' => 'https://imgs.search.brave.com/NLrBRsNJpkKq4L8yTApiDXAr2EAR8Sp-zI2zTbTRpPY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NjFXOFN0dWwzd0wu/anBn',
            ],
            [
                'name' => 'MacBook Air M2',
                'image' => 'https://imgs.search.brave.com/pRKEsczK38ZZCwoVJhRiJRUH_NginM1zylmdh4oyblU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/bWFjdHJhZGUuZGUv/bWVkaWEvMzAvZDAv/NGUvMTY1NDg2NTkw/NS9NYWNCb29rX0Fp/cl8xM19pbl9TdGFy/bGlnaHRfUERQX0lt/YWdlX1Bvc2l0aW9u/LTFfX0RFREUuanBn',
            ],
            [
                'name' => 'iPhone 15',
                'image' => 'https://imgs.search.brave.com/uufodNvy6TnrNasmm1c6Sn1yj0A6dg2XfprqS59By9o/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/Y29tc3BvdC5kZS9j/YWNoZS9jb21zcG90/ZWxlY3Ryb25pY3Nh/bGVzLW1lZGlhc2Vy/dmVyZGUvcHVibGlj/L0FydGlrZWwtMTAy/MTA4My0yLTg1NHg0/ODAtODAuanBnP3Rp/bWVzdGFtcD0xNzMx/NTUxNDgx',
            ],
            [
                'name' => 'Sony PlayStation VR2',
                'image' => 'https://imgs.search.brave.com/FaN5UGJKcXp8NfKrSeITCkUYXhPUJn1iSZ2gQgzlE3A/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9nemhs/cy5hdC9pLzEwLzI3/LzI2ODEwMjctbjAu/anBn',
            ],
            [
                'name' => 'iPad Air 5th Gen',
                'image' => 'https://imgs.search.brave.com/QbaBPj00gI03PQh8-TgQ8mntsY_uZ616O-6Hja4aeBE/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/Z3JvdXAyNC5kZS9t/ZWRpYS8wYy8yMS9h/My8xNjY2NzgwMzcz/LzAxOTQyNTI3OTQ1/MjQtYUhSMGNITTZM/eTlwYm1semFHOXdM/bU52YlM5cGJXY3Za/MkZzYkdWeWVTODVO/elEwTURreU5sODRO/RGt6TURFeE56TTJM/bXB3Wnc9PS53ZWJw',
            ],
            [
                'name' => 'Samsung Galaxy Watch 6',
                'image' => 'https://imgs.search.brave.com/C6eCGFQ6wgDV_ZmKkhrZ-zMi_ijRzjs5SByXL-UVEZk/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jbGVh/cmJ1eS1jbG91ZC5u/eWMzLmRpZ2l0YWxv/Y2VhbnNwYWNlcy5j/b20vbWVkaWEvODI0/NS9TYW1zdW5nLUdh/bGF4eS1XYXRjaC02/LmpwZw',
            ],
            [
                'name' => 'DJI Mini 3 Pro',
                'image' => 'https://imgs.search.brave.com/6iNmH5wCxQcGZdaTwCRqPC5tQrUUvJWjyCKLLrBqNY0/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9nemhs/cy5hdC9pLzE4Lzk0/LzI3MzE4OTQtbjAu/anBn',
            ],
            [
                'name' => 'Ninja Foodi 9-in-1 Deluxe XL',
                'image' => 'https://imgs.search.brave.com/1QbXh2k5EhSJPy_41bsBK5F4lyXdq8HDOydRa_bE_0k/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pLm90/dG8uZGUvaS9vdHRv/LzU0MjNhODNlLTk3/NTYtNTQxOS04Mzcx/LTYxZTMyMzY3ZWY4/ND8kcmVzcG9uc2l2/ZV9mdDIk',
            ],
            [
                'name' => 'KitchenAid Stand Mixer',
                'image' => 'https://imgs.search.brave.com/0CSRtS1DM9HHsderuXjkDdMvBSRmg7yg9JwW9NR8Uf8/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/MzFidzRnUmtkZEwu/anBn',
            ],
            [
                'name' => 'Keurig K-Elite Coffee Maker',
                'image' => 'https://imgs.search.brave.com/Q_Z9asePccNCQwNPrYIGcS2VRVyZUJ5632ZrMKY-qas/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NjF3UWI4SUI4VUwu/anBn',
            ],
            [
                'name' => 'Dyson V15 Detect',
                'image' => 'https://imgs.search.brave.com/SvRjudBxDKu-V2PdsRKJ_FQCU8PlqutdbeMbP5WBT8E/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NTE3TXFUTlA4OUwu/anBn',
            ],
            [
                'name' => 'Instant Pot Pro 10-in-1',
                'image' => 'https://imgs.search.brave.com/pDUnXA0-qCSbYwbN9cszwpHIZ0kZnAplOOA5hX3scJg/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NDFkNTl5NFdXekwu/anBn',
            ],
            [
                'name' => 'PlayStation 5',
                'image' => 'https://imgs.search.brave.com/k9wNtJV5PdaaBLY32kP4nLB-7nE45AZ5yECiSrbOIoM/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9nemhs/cy5hdC9pLzQ2LzQz/LzIzNzQ2NDMtbjAu/anBn',
            ],
            [
                'name' => 'Xbox Series X',
                'image' => 'https://imgs.search.brave.com/DNiOiMAYupBVKGU58RfUVC4T8ZfyhBTwbEQjCh-LWSs/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/MzFGN2hTcW44Tkwu/anBn',
            ],
            [
                'name' => 'Nintendo Switch OLED',
                'image' => 'https://imgs.search.brave.com/k45YhMinO9Jo0KaJ6lBuN0Fx-Y1MMwB42KrBBMmtqEA/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdG9y/ZS5uaW50ZW5kby5k/ZS9fbmV4dC9pbWFn/ZT91cmw9aHR0cHM6/Ly9hc3NldHMubmlu/dGVuZG8uZXUvaW1h/Z2UvdXBsb2FkL2Zf/YXV0by9xX2F1dG8v/djE2MzExODM0ODEv/TU5TL0NvbnRlbnQl/MjBQYWdlcyUyMEFz/c2V0cy9DYXRlZ29y/eS1MaXN0JTIwUGFn/ZXMvQ29uc29sZXMv/U3dpdGNoJTIwQ29u/c29sZXMvTmludGVu/ZG8lMjBTd2l0Y2gl/MjBPTEVELzE2Ljlf/TGlzdEhlYWRlcl9T/d2l0Y2hfTmludGVu/ZG9Td2l0Y2hPTEVE/TW9kZWxfQmVhdXR5/U2hvdF9lbk5PRS5q/cGcmdz0zODQwJnE9/NzU',
            ],
            [
                'name' => 'Gaming PC RTX 4070',
                'image' => 'https://imgs.search.brave.com/G5kPoQFT0gTC1L6PtJkcckqIybe3mR5tKqTvpbCPU6o/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/ODFhbm5Nc3Zndkwu/anBn',
            ],
            [
                'name' => 'Razer BlackWidow V3',
                'image' => 'https://imgs.search.brave.com/6PTm-c-5QnXou-8QQqoehOjS_mfe0On8-fM0x2RQxV0/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9hc3Nl/dHMyLnJhemVyem9u/ZS5jb20vaW1hZ2Vz/L3BueC5hc3NldHMv/NWI0YjNhYTU0Njcx/YjVmNjVmYjM1ZWMy/NzJmODI4YTYvcmF6/ZXItYmxhY2t3aWRv/dy12My1oZXJvLW1v/YmlsZS11cGRhdGUu/d2VicA',
            ],
            [
                'name' => 'Nike Air Max',
                'image' => 'https://imgs.search.brave.com/XJege__12zVYiX-Wq881yomahSgEEKC0S3h3jYnzDUs/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zbmVh/a2VybmV3cy5jb20v/d3AtY29udGVudC91/cGxvYWRzLzIwMjQv/MTEvbmlrZS1haXIt/bWF4LTEtc3VtbWl0/LXdoaXRlLWFybW9y/eS1uYXZ5LWZ6NTgw/OC0xMDMtMi5qcGc',
            ],
            [
                'name' => 'Levi\'s 501 Original',
                'image' => 'https://imgs.search.brave.com/shWb_XFtMmX7zorfynT0L5SBuLavmY_TJaxHxYuv3Tw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NjFSVE5hQjBOSkwu/anBn',
            ],
            [
                'name' => 'Philips Hue Starter Kit',
                'image' => 'https://imgs.search.brave.com/fgsv0ZkunbTkCkJnNP0Ks27p3qMmq-Ppc5ay9wKbUNU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NDF3N1Iwbmc1U0wu/anBn',
            ],
            [
                'name' => 'Nest Learning Thermostat',
                'image' => 'https://imgs.search.brave.com/JTlY05h8Y75vv6eogd7BX1o6qhGoWN2n76BCMoZ8eD0/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly85dG81/dG95cy5jb20vd3At/Y29udGVudC91cGxv/YWRzL3NpdGVzLzUv/MjAyNC8xMS9Hb29n/bGUtTmVzdC1MZWFy/bmluZy1UaGVybW9z/dGF0LTR0aC1HZW4t/QmxhY2stRnJpZGF5/LWRlYWwuanBnP3c9/MTIwMCZoPTYwMCZj/cm9wPTE',
            ],
            [
                'name' => 'Sony WH-1000XM5',
                'image' => 'https://imgs.search.brave.com/yz2kYEpz6xsHO_dnM9WnIzz-3JGb9KzT0P7pzoc-3TU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9nemhs/cy5hdC9pLzM4Lzc0/LzI3MzM4NzQtbjEu/anBn',
            ],
            [
                'name' => 'Sonos Beam',
                'image' => 'https://imgs.search.brave.com/ZdhruoHnyBIkStxv7o6cEmb4FQGb9ZE_AnbXDaABM6o/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/aWRlYWxvLmNvbS9m/b2xkZXIvUHJvZHVj/dC8yMDE1OTgvNi8y/MDE1OTg2NTMvczFf/cHJvZHVrdGJpbGRf/bWl0dGVsZ3Jvc3Mv/c29ub3MtYmVhbS1n/ZW4tMi1ibGFjay5q/cGc',
            ],
            [
                'name' => 'LG C2 65" OLED TV',
                'image' => 'https://imgs.search.brave.com/s0gy8EOapkTVtPxaCS2sL4aSYDgCNtJ44KcYO80vY0M/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NzFieEhzd3FxR0wu/anBn',
            ],
            [
                'name' => 'Bose QuietComfort Ultra',
                'image' => 'https://imgs.search.brave.com/9u4lQw1u7TixcLEKsEPNyg4DDb-IdL9MGPkTxHZWA5k/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9nemhs/cy5hdC9pLzMwLzQ1/LzMwMjMwNDUtbTAu/d2VicA',
            ],
            [
                'name' => 'LEGO Star Wars Set',
                'image' => 'https://imgs.search.brave.com/EgfW4Wwq46B040jvujiLkR8YpEvYF6IfpNAP6KA_G4A/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/ODFrV3FjUFQ5Skwu/anBn',
            ],
            [
                'name' => 'Hot Wheels Mega Track',
                'image' => 'https://imgs.search.brave.com/-ykWPZqbumr14nNOmk670yogFUO63NK09E6xNocoUas/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/ODErakZDWDI2ZUwu/anBn',
            ],
            [
                'name' => 'PS5 God of War Bundle',
                'image' => 'https://imgs.search.brave.com/z4kkATaS0xau37xZwWf9iHBHZSko_0bciRKHNrxoS9s/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/MzFjeEVHc2ZGSkwu/anBn',
            ],
            [
                'name' => 'Nintendo Switch Sports',
                'image' => 'https://imgs.search.brave.com/S4lO6_X_5eri5sz-T4XlDSQaYPt1Mj6uJypo_iDzk14/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZXhwZXJ0LXRlY2hu/b21hcmt0LmRlLzEy/MDB4MTIwMHg1MC96/MS9uaW50ZW5kby1z/d2l0Y2gtc3BvcnRz/LW5pbi0wMDQ1NDk2/NDI5NTUzLTEuanBl/Zw',
            ],
            [
                'name' => 'Dyson Airwrap',
                'image' => 'https://imgs.search.brave.com/s9D95JKdjdPBBxLFi057tIBFEozoQYRRTXk5rmB_Bqk/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NTFEVXl2RVY2bUwu/anBn',
            ],
            [
                'name' => 'Oral-B iO Series 9',
                'image' => 'https://imgs.search.brave.com/ug4h2Mgk9hPIPCabiy_radiBuLfdNSWRwB4q20lPK-c/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMudGhjZG4uY29t/L2ltYWdlcy9sYXJn/ZS9vcmlnaW5hbC8v/cHJvZHVjdGltZy8x/NjAwLzE2MDAvMTQw/MDI2ODUtMTA3NTE0/NzMxMDU2MDE2OS5q/cGc',
            ],
            [
                'name' => 'Theragun Prime',
                'image' => 'https://imgs.search.brave.com/YR8sCcTm9DQjf6YK2_IgAMqKJqFFoGeRl02SpGx-w1I/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9hc3Nl/dHMubW1zcmcuY29t/L2lzci8xNjYzMjUv/YzEvLS9BU1NFVF9N/TVNfNzg1MjQzMDUv/ZmVlXzMyNV8yMjVf/cG5n',
            ],
            [
                'name' => 'GHD Platinum+ Styler',
                'image' => 'https://imgs.search.brave.com/-f92fBC8z78YfdN_bl7Wr1MT2BbLobsDe2keIzdxNYY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NjFQeDlXNkFqZUwu/anBn',
            ],
            [
                'name' => 'Echo Dot 5th Gen',
                'image' => 'https://imgs.search.brave.com/nDUCY08tnCyaLYc2uae0vxMA9z9qnRrRI3bgR_Gm4rg/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9jbGVh/cmJ1eS1jbG91ZC5u/eWMzLmRpZ2l0YWxv/Y2VhbnNwYWNlcy5j/b20vbWVkaWEvNDg4/NS9BbWF6b24tRWNo/by1Eb3QuanBn',
            ],
            [
                'name' => 'Ring Video Doorbell',
                'image' => 'https://imgs.search.brave.com/NrxLhewWJZFxzJm8CK-AGyjT9owGrWTUVHLhYkhCE2M/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NDFkTEtOTTRkR0wu/anBn',
            ],
            [
                'name' => 'The North Face Jacket',
                'image' => 'https://imgs.search.brave.com/HYY0QxJQ5loRX2oyZPCBe9iCjjWYjSFM-WJOuX4PjMA/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NjFGdndMbU43WUwu/anBn',
            ],
            [
                'name' => 'Adidas Ultraboost',
                'image' => 'https://imgs.search.brave.com/4Ri_Mgd60ZU_H6KYlIl-ef54Rek2PZBW39pleECghME/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NzFpMDJaMkdWV0wu/anBn',
            ],
        ];

        // Helper function to find image URL by product name
        $getImageUrl = function($productName) use ($images) {
            foreach ($images as $image) {
                if ($image['name'] === $productName) {
                    return $image['image'];
                }
            }
            // Log the missing product name for debugging
            echo "Warning: No image found for product: $productName\n";
            return 'https://placehold.co/600x400?text=No+Image+Available';
        };

        // Electronics (Category 1)
        Product::create([
            'name' => 'Samsung 65" 4K Smart TV',
            'price' => 699.99,
            'description' => 'Experience breathtaking clarity with the Samsung 65" 4K QLED Smart TV. Featuring Quantum Dot technology for over a billion shades of color, Neo QLED backlighting for precise brightness control, and Object Tracking Sound for immersive 3D audio. Built-in Alexa and Google Assistant, Samsung Gaming Hub for cloud gaming, and Ultra Viewing Angle technology ensures perfect picture quality from any seat. With AI-powered 4K upscaling, even lower resolution content looks stunning in near-4K quality. Includes Samsung\'s Smart Hub interface for easy access to all your favorite streaming apps and content.',
            'stock' => 50,
            'category_id' => 1,
            'is_featured' => true,
            'discount_percentage' => 10.00,
            'discounted_price' => 629.99,
            'user_id' => 1,
            'image' => $getImageUrl('Samsung 65" 4K Smart TV'),
        ]);
        Product::create([
            'name' => 'MacBook Air M2',
            'price' => 899.99,
            'description' => 'The remarkably thin MacBook Air M2 redefines performance and portability. Powered by Apple\'s revolutionary M2 chip with 8-core CPU and up to 10-core GPU for blazing-fast performance. Features a stunning 13.6" Liquid Retina display with 500 nits brightness and P3 wide color. Up to 18 hours of battery life, 8GB unified memory, and 256GB SSD storage. MagSafe charging, two Thunderbolt ports, and a 3.5mm headphone jack. 1080p FaceTime HD camera with advanced image signal processor for sharper video calls. Backlit Magic Keyboard with Touch ID for secure authentication. All in an incredibly thin 11.3mm design weighing just 2.7 pounds.',
            'stock' => 30,
            'category_id' => 1,
            'discount_percentage' => 15.00,
            'discounted_price' => 764.99,
            'user_id' => 1,
            'image' => $getImageUrl('MacBook Air M2'),
        ]);
        Product::create([
            'name' => 'iPhone 15',
            'price' => 699.99,
            'description' => 'The iPhone 15 sets a new standard for smartphone innovation. Featuring the powerful A17 Pro chip, a sophisticated 48MP main camera with advanced computational photography, and a stunning Super Retina XDR OLED display with ProMotion technology. Dynamic Island adapts fluidly to show alerts and live activities. Ceramic Shield front cover provides 4x better drop protection. IP68 water resistance, MagSafe charging capability, and all-day battery life. Enhanced portrait mode with Focus and Depth Control, Photonic Engine for extraordinary detail and color, and Action mode for smooth, steady handheld videos. Available in 128GB storage with Midnight Black finish.',
            'stock' => 100,
            'category_id' => 1,
            'discount_percentage' => 10.00,
            'discounted_price' => 629.99,
            'user_id' => 1,
            'image' => $getImageUrl('iPhone 15'),
        ]);
        Product::create([
            'name' => 'Sony PlayStation VR2',
            'price' => 549.99,
            'description' => 'Step into the next generation of virtual reality with PlayStation VR2. Experience stunning 4K HDR displays with 110-degree field of view and up to 120Hz refresh rate for ultra-smooth gameplay. Features eye tracking technology, 3D audio, and haptic feedback in both the headset and controllers for unprecedented immersion. New Sense controllers with finger touch detection and adaptive triggers provide intuitive control. Single-cord setup connects directly to PS5. Includes headset, controllers, and stereo headphones. Compatible with growing library of PSVR2 titles and select PSVR games. Built-in ventilation system and adjustable scope for maximum comfort during extended play sessions.',
            'stock' => 40,
            'category_id' => 1,
            'discount_percentage' => 20.00,
            'discounted_price' => 439.99,
            'user_id' => 1,
            'image' => $getImageUrl('Sony PlayStation VR2'),
        ]);
        Product::create([
            'name' => 'iPad Air 5th Gen',
            'price' => 599.99,
            'description' => 'The iPad Air (5th generation) brings desktop-class performance to a thin and light design. Powered by the M1 chip for transformative performance and all-day battery life. 10.9-inch Liquid Retina display with True Tone, P3 wide color, and anti-reflective coating. 12MP Ultra Wide front camera with Center Stage for dynamic video calls. USB-C connectivity for fast data transfer and charging. Works with Apple Pencil (2nd generation) and Magic Keyboard. Features Touch ID in the top button, Wi-Fi 6 connectivity, and 64GB storage. Available in stunning Space Gray finish with support for iPadOS multitasking features.',
            'stock' => 55,
            'category_id' => 1,
            'discount_percentage' => 15.00,
            'discounted_price' => 509.99,
            'user_id' => 1,
            'image' => $getImageUrl('iPad Air 5th Gen'),
        ]);

        // Home & Kitchen (Category 2)
        Product::create([
            'name' => 'Ninja Foodi 9-in-1 Deluxe XL',
            'price' => 159.99,
            'description' => 'Transform your cooking experience with the Ninja Foodi 9-in-1 Deluxe XL. This versatile appliance combines a pressure cooker, air fryer, steamer, slow cooker, yogurt maker, sear/sauté pan, bake/roast function, broiler, and dehydrator in one powerful unit. 8-quart ceramic-coated pot is nonstick and dishwasher safe. TenderCrisp Technology lets you pressure cook to lock in juices, then finish with a crispy air fryer coating. Digital display with 14 safety features and customizable programs. Includes reversible rack, recipe book, and cooking cheat sheets. Perfect for families with XL capacity cooking up to 8 portions. Reduce cooking time by up to 70% compared to traditional methods.',
            'stock' => 75,
            'category_id' => 2,
            'is_featured' => true,
            'discount_percentage' => 10.00,
            'discounted_price' => 143.99,
            'image' => $getImageUrl('Ninja Foodi 9-in-1 Deluxe XL'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'KitchenAid Stand Mixer',
            'price' => 249.99,
            'description' => 'Experience professional-grade mixing with the iconic KitchenAid Stand Mixer. Features a powerful 325-watt motor and 10 speed settings for precise control. The 5-quart stainless steel bowl can handle up to 9 dozen cookies in a single batch. Includes a coated flat beater, coated dough hook, 6-wire whip, and pouring shield. Planetary mixing action hits 59 touchpoints per rotation for thorough ingredient incorporation. Tilt-head design provides easy access to bowl and attached beaters. Compatible with over 10 optional attachments to transform your mixer into a culinary center. Available in classic Empire Red finish. Bowl-lift design ensures stability and bowl support when mixing heavy ingredients. Made in the USA with a full 1-year warranty.',
            'stock' => 40,
            'category_id' => 2,
            'discount_percentage' => 15.00,
            'discounted_price' => 212.49,
            'image' => $getImageUrl('KitchenAid Stand Mixer'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Keurig K-Elite Coffee Maker',
            'price' => 119.99,
            'description' => 'Elevate your coffee experience with the Keurig K-Elite Coffee Maker. Featuring programmable settings for five cup sizes (4, 6, 8, 10, and 12 oz) and an iced coffee setting for full-flavored iced beverages. Strong brew button increases coffee strength and intensity. Quiet brew technology minimizes noise during brewing. Large 75 oz water reservoir allows you to brew 8 cups before refilling. Hot water on demand button perfect for instant soups or oatmeal. Programmable auto on/off feature, temperature control (187° – 192°), and high altitude setting. Maintenance reminder alerts for descaling. Includes a water filter handle and filter to ensure optimal taste. Brews any K-Cup pod or compatible reusable filter.',
            'stock' => 60,
            'category_id' => 2,
            'discount_percentage' => 10.00,
            'discounted_price' => 107.99,
            'image' => $getImageUrl('Keurig K-Elite Coffee Maker'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Dyson V15 Detect',
            'price' => 749.99,
            'description' => 'Revolutionary cleaning technology meets intelligent design in the Dyson V15 Detect. Features a precisely-angled laser that reveals microscopic dust particles invisible to the naked eye. Piezo sensor continuously sizes and counts dust particles, automatically increasing suction power when needed. Advanced HEPA filtration captures 99.99% of particles as small as 0.3 microns. Up to 60 minutes of fade-free run time with click-in battery. LCD screen displays chosen power mode, remaining run time, and maintenance alerts. Includes specialized cleaner heads: Laser Slim Fluffy for hard floors, Digital Motorbar for carpets, and Hair Screw Tool for pet hair. Transforms into a handheld for versatile cleaning. 0.2-gallon bin capacity with hygienic point-and-shoot emptying mechanism.',
            'stock' => 30,
            'category_id' => 2,
            'discount_percentage' => 25.00,
            'discounted_price' => 562.49,
            'image' => $getImageUrl('Dyson V15 Detect'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Instant Pot Pro 10-in-1',
            'price' => 199.99,
            'description' => 'Master multi-cooking with the Instant Pot Pro 10-in-1 Pressure Cooker. Combines 10 appliances in one: pressure cooker, slow cooker, sous vide, sauté pan, rice cooker, sterilizer, yogurt maker, food warmer, cake baker, and steamer. Features an upgraded gentle steam release switch with diffusing cover to reduce noise and prevent splashing. 28 customizable cooking programs for perfect results. Advanced steam release programming with QuickCool technology. 5 programmable favorites and LCD display with cooking progress indicators. Extra-large dual-heat stainless steel cooking pot with handles and flat bottom for even cooking. Includes stainless steel steam rack with handles, extra sealing ring, and silicone protective pad. UL certified with 11+ safety features. Perfect for families with 6-quart capacity.',
            'stock' => 85,
            'category_id' => 2,
            'discount_percentage' => 40.00,
            'discounted_price' => 119.99,
            'image' => $getImageUrl('Instant Pot Pro 10-in-1'),
            'user_id' => 1,
        ]);

        // Gaming (Category 3)
        Product::create([
            'name' => 'PlayStation 5',
            'price' => 449.99,
            'description' => 'Enter the next generation of gaming with the PlayStation 5 Digital Edition. Powered by an custom AMD CPU with 8 cores and 3.5GHz clock speed, paired with 16GB GDDR6 RAM for lightning-fast performance. Features ray tracing support, 4K resolution, and up to 120fps gameplay with compatible displays. Revolutionary DualSense controller with haptic feedback and adaptive triggers provides unprecedented immersion. 825GB custom SSD enables near-instant load times and seamless game switching. 3D Audio technology delivers immersive soundscapes through compatible headsets. Backwards compatible with thousands of PS4 titles. Includes built-in Wi-Fi 6 and Bluetooth 5.1 for reliable connectivity. Access a vast library of games through digital download and PlayStation Plus subscription service.',
            'stock' => 25,
            'category_id' => 3,
            'is_featured' => true,
            'discount_percentage' => 10.00,
            'discounted_price' => 394.99,
            'image' => $getImageUrl('PlayStation 5'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Xbox Series X',
            'price' => 449.99,
            'description' => 'Experience true next-generation gaming with the Xbox Series X. Featuring 12 teraflops of raw processing power from a custom AMD RDNA 2 GPU, enabling 4K resolution at up to 120 frames per second. Quick Resume feature allows seamless switching between multiple games. 1TB custom NVMe SSD provides lightning-fast load times and instant game switching. Smart Delivery ensures you\'re always playing the best version of your games. Dolby Vision and Dolby Atmos support for immersive gaming experiences. Backwards compatible with thousands of titles from previous Xbox generations. Enhanced cooling architecture ensures quiet operation under heavy loads. Includes redesigned wireless controller with improved ergonomics and dedicated share button. Xbox Game Pass ready for instant access to hundreds of high-quality games.',
            'stock' => 30,
            'category_id' => 3,
            'discount_percentage' => 10.00,
            'discounted_price' => 394.99,
            'image' => $getImageUrl('Xbox Series X'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Nintendo Switch OLED',
            'price' => 299.99,
            'description' => 'Experience gaming in vibrant color with the Nintendo Switch OLED Model. Features a brilliant 7-inch OLED screen delivering vivid colors and crisp contrast. Enhanced audio system provides crystal-clear sound in handheld and tabletop modes. Wide adjustable stand for stable tabletop play, built-in wired LAN port for stable online gaming. 64GB internal storage with microSD expansion support. Up to 9 hours of battery life. Includes upgraded dock with sleek white design, two Joy-Con controllers with HD rumble and IR sensors. Compatible with all Nintendo Switch games and accessories. Perfect for both solo play and multiplayer gaming. Seamlessly transition between handheld, tabletop, and TV modes. Enhanced grip design for comfortable extended gaming sessions.',
            'stock' => 45,
            'category_id' => 3,
            'discount_percentage' => 10.00,
            'discounted_price' => 269.99,
            'image' => $getImageUrl('Nintendo Switch OLED'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Gaming PC RTX 4070',
            'price' => 1499.99,
            'description' => 'Dominate the gaming arena with this custom-built gaming powerhouse. Featuring the NVIDIA GeForce RTX 4070 with 12GB GDDR6X memory for stunning ray-traced graphics and DLSS 3.0 support. Powered by the latest Intel Core i7 13700K processor with 16 cores and 24 threads for exceptional multitasking performance. 32GB DDR5 RAM at 6000MHz ensures smooth gameplay and content creation. 2TB NVMe Gen4 SSD delivers lightning-fast load times and system responsiveness. Premium 850W 80+ Gold PSU for reliable power delivery. Advanced RGB liquid cooling system maintains optimal temperatures under heavy loads. Custom RGB lighting with synchronized effects. Pre-installed Windows 11 Pro. Includes gaming keyboard and mouse. Tool-less design for easy upgrades. 3-year warranty with lifetime technical support.',
            'stock' => 20,
            'category_id' => 3,
            'discount_percentage' => 15.00,
            'discounted_price' => 1274.99,
            'image' => $getImageUrl('Gaming PC RTX 4070'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Razer BlackWidow V3',
            'price' => 139.99,
            'description' => 'Elevate your gaming experience with the Razer BlackWidow V3 Pro mechanical gaming keyboard. Features Razer™ Green Mechanical Switches with tactile and clicky feedback, rated for 80 million keystrokes. Multi-function digital dial and 4 media keys for convenient controls. Doubleshot ABS keycaps ensure legends never fade. Full N-key rollover with 100% anti-ghosting. Hybrid on-board memory and cloud storage for up to 5 profiles. Chroma RGB backlighting with 16.8 million customizable color options. Detachable plush leatherette wrist rest for extended comfort. Aircraft-grade aluminum construction for durability. HyperSpeed Wireless technology provides lag-free gaming. Up to 192 hours of battery life. Includes USB-C charging cable. Compatible with Razer Synapse 3 for advanced customization.',
            'stock' => 100,
            'category_id' => 3,
            'discount_percentage' => 30.00,
            'discounted_price' => 97.99,
            'image' => $getImageUrl('Razer BlackWidow V3'),
            'user_id' => 1,
        ]);

        // Fashion (Category 4)
        Product::create([
            'name' => 'Nike Air Max',
            'price' => 89.99,
            'description' => 'Step into comfort and style with the Nike Air Max. Features revolutionary Air cushioning technology visible through the iconic window design. Engineered mesh upper provides strategic breathability and support where needed most. Foam midsole combines with the Max Air unit for responsive cushioning and enhanced energy return. Rubber Waffle outsole delivers durable traction and heritage look. Dynamic Flywire technology integrates with the laces for adaptive support. Padded collar and tongue for plush comfort around the ankle. Reflective design elements enhance visibility in low light. Removable foam insole for customizable comfort. Flex grooves in the forefoot allow natural motion. Available in multiple colorways to match any style. Lightweight design perfect for all-day wear. Ideal for both athletic performance and casual style.',
            'stock' => 100,
            'category_id' => 4,
            'discount_percentage' => 10.00,
            'discounted_price' => 79.99,
            'image' => $getImageUrl('Nike Air Max'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Levi\'s 501 Original',
            'price' => 49.99,
            'description' => 'Experience the timeless style of Levi\'s 501 Original jeans. Crafted from premium heavyweight denim with signature straight-leg fit and button-fly closure. Features authentic five-pocket styling, including the iconic red tab and leather patch. Made with sustainable cotton and water-saving techniques in production. Regular fit through hip and thigh with 16-inch leg opening. Sits at waist with 11.25-inch front rise for classic comfort. Durable construction with reinforced stress points and double-stitched seams. Available in multiple washes and finishes. Signature arcuate stitching on back pockets. Pre-shrunk fabric maintains shape after washing. Perfect for casual wear or dressed up for versatile styling. Heritage quality from the original blue jean maker since 1873.',
            'stock' => 150,
            'category_id' => 4,
            'discount_percentage' => 10.00,
            'discounted_price' => 44.99,
            'image' => $getImageUrl('Levi\'s 501 Original'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'The North Face Jacket',
            'price' => 229.99,
            'description' => 'Conquer any weather with The North Face Waterproof Winter Parka. Features DryVent™ 2L waterproof, breathable technology with fully sealed seams. 550-fill down insulation provides exceptional warmth without bulk. Adjustable, insulated hood with removable faux-fur trim for customizable protection. Multiple secure-zip pockets including chest and hand-warming pockets. Internal media pocket with media port. Adjustable hem and cuff tabs for customizable fit. Two-way front zip with storm flap for added weather protection. Comfortable fleece liner at collar and chin guard. Articulated sleeves for enhanced mobility. Available in extended sizes for perfect fit. Machine washable for easy care. Lifetime warranty against defects. Perfect for urban adventures or winter sports.',
            'stock' => 75,
            'category_id' => 4,
            'discount_percentage' => 35.00,
            'discounted_price' => 149.49,
            'image' => $getImageUrl('The North Face Jacket'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Adidas Ultraboost',
            'price' => 189.99,
            'description' => 'Revolutionize your running experience with the Adidas Ultraboost. Features responsive BOOST™ midsole technology that returns energy with every step. Primeknit+ upper adapts to your foot\'s natural movement while providing targeted support. Continental™ Rubber outsole delivers exceptional grip in wet and dry conditions. Linear Energy Push system enhances stability and propulsion. TORSION® SYSTEM provides midfoot integrity and support. Sock-like construction with flexible Stretchweb outsole. 3D Heel Frame allows natural Achilles movement. Sustainable materials with Primeblue recycled content. Responsive cushioning maintains consistency through temperature changes. Solar Propulsion Rails guide and enhance forward motion. Includes removable sockliner for customized comfort. Available in multiple colorways. Perfect for both performance running and casual wear.',
            'stock' => 120,
            'category_id' => 4,
            'discount_percentage' => 25.00,
            'discounted_price' => 142.49,
            'image' => $getImageUrl('Adidas Ultraboost'),
            'user_id' => 1,
        ]);

        // Smart Home (Category 5)
        Product::create([
            'name' => 'Echo Dot 5th Gen',
            'price' => 29.99,
            'description' => 'Transform your smart home with the Echo Dot 5th Generation. Featuring improved audio architecture for richer, clearer sound with deeper bass. Advanced Alexa capabilities for voice control of smart home devices, music streaming, and daily tasks. Enhanced privacy controls including microphone off button. Built-in eero mesh WiFi extender adds up to 1,000 sq ft of coverage. Motion detection for automated routines. Precise ultrasound technology for improved presence sensing. LED display shows time, weather, and other information at a glance. Stream from Amazon Music, Apple Music, Spotify, and more. Make hands-free calls and use as an intercom with other Echo devices. Compatible with thousands of smart home devices. Setup in minutes with the Alexa app. Available in charcoal fabric design.',
            'stock' => 200,
            'category_id' => 5,
            'is_featured' => true,
            'discount_percentage' => 10.00,
            'discounted_price' => 26.99,
            'image' => $getImageUrl('Echo Dot 5th Gen'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Ring Video Doorbell',
            'price' => 79.99,
            'description' => "Enhance your home security with the Ring Video Doorbell Pro 2. Features advanced 3D motion detection and Bird's Eye View for precise monitoring. 1536p HD video with Head to Toe video coverage and enhanced color night vision. Two-way talk with noise cancellation for clear communication. Customizable motion zones and privacy settings. Quick Replies for automated responses when you're busy. Built-in dual-band WiFi for reliable connectivity. Advanced Pre-Roll captures 4 seconds before motion events. Compatible with Alexa for hands-free monitoring. Real-time notifications to your phone, tablet, or PC. Weather-resistant design with interchangeable faceplates. Professional power kit included for consistent performance. Easy installation with included tools. Requires existing doorbell wiring. Includes 30-day free trial of Ring Protect Plan.",
            'stock' => 80,
            'category_id' => 5,
            'discount_percentage' => 10.00,
            'discounted_price' => 71.99,
            'image' => $getImageUrl('Ring Video Doorbell'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Philips Hue Starter Kit',
            'price' => 199.99,
            'description' => 'Create the perfect ambiance with the Philips Hue White and Color Ambiance Starter Kit. Includes Hue Bridge and four A19 LED smart bulbs capable of 16 million colors and 50,000 shades of white light. Each bulb delivers 800 lumens of brightness with 10W power consumption. Voice control compatible with Alexa, Google Assistant, and Apple HomeKit. Create custom scenes and automated schedules through the Hue app. Sync lights with music, games, and movies for immersive entertainment. Away-from-home control and power failure recovery. Energy efficient with 25,000-hour lifetime. Wireless control up to 50 lights per Bridge. Regular software updates for new features. Easy setup with Bluetooth or Bridge connection. Expandable system with wide range of Hue accessories.',
            'stock' => 60,
            'category_id' => 5,
            'discount_percentage' => 30.00,
            'discounted_price' => 139.99,
            'image' => $getImageUrl('Philips Hue Starter Kit'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Nest Learning Thermostat',
            'price' => 249.99,
            'description' => 'Revolutionize your home comfort with the Nest Learning Thermostat. Features a sleek design with a 4-inch touchscreen display. Smart predictive technology adjusts the temperature to save energy and keep you comfortable. Voice control compatible with Alexa, Google Assistant, and Apple HomeKit. Easy installation with built-in tools. Compatible with most HVAC systems. Works with Google Nest smart home devices. Includes Nest Aware subscription for 24/7 monitoring and energy insights. Available in matte black or white finish.',
            'stock' => 45,
            'category_id' => 5,
            'discount_percentage' => 20.00,
            'discounted_price' => 199.99,
            'image' => $getImageUrl('Nest Learning Thermostat'),
            'user_id' => 1,
        ]);

        // TV & Audio (Category 6)
        Product::create([
            'name' => 'Sony WH-1000XM5',
            'price' => 299.99,
            'description' => 'Experience industry-leading noise cancellation with the Sony WH-1000XM5 wireless headphones. Features eight microphones and two processors for unprecedented noise cancellation. Auto NC Optimizer adjusts to atmospheric pressure and wearing conditions. 30mm driver units deliver exceptional sound quality with edge-AI upscaling. Precise Voice Pickup technology and advanced audio signal processing ensure crystal-clear calls. Multipoint connection allows simultaneous pairing with two Bluetooth devices. Adaptive Sound Control automatically adjusts ambient sound settings based on your activity. Up to 30 hours of battery life with quick charging (3 hours playback from 3 minutes charge). Touch sensor controls for easy operation. Speak-to-chat automatically pauses music when you start talking. Includes carrying case, USB-C cable, and audio cable for wired use. Compatible with Google Assistant and Alexa.',
            'stock' => 60,
            'category_id' => 6,
            'discount_percentage' => 10.00,
            'discounted_price' => 269.99,
            'image' => $getImageUrl('Sony WH-1000XM5'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Sonos Beam',
            'price' => 399.99,
            'description' => "Transform your home entertainment with the Sonos Beam (Gen 2) smart soundbar. Features Dolby Atmos technology for immersive 3D sound that places you in the center of the action. Custom-designed elliptical woofers and precisely angled tweeters deliver rich bass and crystal-clear dialogue. Enhanced with Trueplay tuning technology that adapts the sound to your room's unique acoustics. HDMI eARC support for high-quality audio streaming. Built-in voice control with Amazon Alexa and Google Assistant. Apple AirPlay 2 integration for seamless streaming from iOS devices. Speech Enhancement feature boosts voice clarity. Night Sound mode reduces the intensity of loud effects. Compact design fits perfectly under your TV. Easy setup with just two cords and the Sonos app. Expandable with additional Sonos speakers for surround sound. Available in matte black or white finish.",
            'stock' => 40,
            'category_id' => 6,
            'discount_percentage' => 10.00,
            'discounted_price' => 359.99,
            'image' => $getImageUrl('Sonos Beam'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'LG C2 65" OLED TV',
            'price' => 1799.99,
            'description' => 'Experience stunning picture quality with the LG C2 65" OLED evo TV. Powered by the advanced α9 Gen5 AI Processor 4K for enhanced picture and sound quality. Self-lit OLED pixels deliver perfect blacks and infinite contrast. Brightness Booster technology provides up to 20% more brightness than conventional OLED. Dolby Vision IQ and Dolby Atmos support for cinema-quality entertainment. NVIDIA G-SYNC, AMD FreeSync Premium, and VRR for smooth gaming performance. Four HDMI 2.1 ports support 4K/120Hz gaming. WebOS 22 smart platform with built-in voice assistants and Magic Remote. AI Picture Pro and AI Sound Pro optimize content in real-time. Gallery Design with ultra-slim profile mounts flush to the wall. Filmmaker Mode preserves creative intent. Eye Comfort Display certified for reduced blue light emission. Includes Magic Remote with point and click functionality.',
            'stock' => 25,
            'category_id' => 6,
            'discount_percentage' => 30.00,
            'discounted_price' => 1259.99,
            'image' => $getImageUrl('LG C2 65" OLED TV'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Bose QuietComfort Ultra',
            'price' => 429.99,
            'description' => 'Immerse yourself in premium audio with the Bose QuietComfort Ultra headphones. Features next-generation noise cancelling technology with CustomTune audio calibration that personalizes performance to your ears. Innovative Snapdragon Sound technology delivers high-resolution audio with ultra-low latency. Advanced microphone system with noise-rejecting algorithm ensures clear calls in any environment. Adjustable EQ and Quiet, Aware, and Immersion modes for customized listening experiences. SimpleSync technology allows pairing with Bose soundbars and speakers. Touch controls for intuitive operation of volume, tracks, and calls. Up to 24 hours of battery life on a single charge. Fast charge provides 2.5 hours of play time from 15 minutes charging. Bluetooth 5.3 with multipoint connection. Premium build quality with protein leather ear cushions and stainless steel headband. Includes carrying case, USB-C cable, and audio cable.',
            'stock' => 70,
            'category_id' => 6,
            'discount_percentage' => 15.00,
            'discounted_price' => 365.49,
            'image' => $getImageUrl('Bose QuietComfort Ultra'),
            'user_id' => 1,
        ]);

        // Toys & Games (Category 7)
        Product::create([
            'name' => 'LEGO Star Wars Set',
            'price' => 79.99,
            'description' => 'Build the iconic Millennium Falcon with the LEGO Star Wars Set. Features 1,073 pieces, including detailed minifigures of Han Solo, Chewbacca, and Lando Calrissian. Includes a display stand and a removable cockpit with opening panels. Compatible with all LEGO building sets. Compatible with LEGO Building Instructions app for digital building instructions. Compatible with LEGO Builder Creator Expert and Creator Expert 3-in-1 sets. Compatible with LEGO Creator Expert 3-in-1 sets. Compatible with LEGO Creator Expert 3-in-1 sets. Compatible with LEGO Creator Expert 3-in-1 sets.',
            'stock' => 70,
            'category_id' => 7,
            'is_featured' => true,
            'discount_percentage' => 10.00,
            'discounted_price' => 71.99,
            'image' => $getImageUrl('LEGO Star Wars Set'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Hot Wheels Mega Track',
            'price' => 44.99,
            'description' => 'Experience the thrill of speed with the Hot Wheels Mega Track. Features a 100-foot track with 100% recyclable materials. Includes 100 cars and 100 track pieces. Compatible with all Hot Wheels track sets. Compatible with Hot Wheels Building Instructions app for digital building instructions. Compatible with Hot Wheels Builder Creator Expert and Creator Expert 3-in-1 sets. Compatible with Hot Wheels Creator Expert 3-in-1 sets. Compatible with Hot Wheels Creator Expert 3-in-1 sets. Compatible with Hot Wheels Creator Expert 3-in-1 sets.',
            'stock' => 90,
            'category_id' => 7,
            'discount_percentage' => 10.00,
            'discounted_price' => 39.49,
            'image' => $getImageUrl('Hot Wheels Mega Track'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'PS5 God of War Bundle',
            'price' => 559.99,
            'description' => 'Experience the epic adventure of God of War with the PS5 God of War Bundle. Features a PS5 console with a custom design inspired by Kratos and Atreus. Includes the God of War game and a DualSense wireless controller with a matching design. 825GB SSD for faster load times and improved game performance. Ray Tracing technology for enhanced visuals. Tempest 3D AudioTech for immersive sound. Built-in Blu-ray player for physical media. 4K UHD Blu-ray support. 100GB cloud storage for game saves and streaming. Optional 3rd party monitor support. Compatible with all PS5 accessories. Includes one month of PlayStation Plus.',
            'stock' => 35,
            'category_id' => 7,
            'discount_percentage' => 10.00,
            'discounted_price' => 503.99,
            'image' => $getImageUrl('PS5 God of War Bundle'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Nintendo Switch Sports',
            'price' => 49.99,
            'description' => 'Experience the ultimate sports experience with Nintendo Switch Sports. Features 12 different sports, including tennis, bowling, and volleyball. 1080p resolution at 60 frames per second. Local multiplayer for up to 4 players. Online multiplayer for up to 8 players. Motion controls with HD rumble for enhanced gameplay. Voice chat with mute function. Nintendo Switch Online membership required for online play. Compatible with all Nintendo Switch accessories. Includes one month of Nintendo Switch Online.',
            'stock' => 150,
            'category_id' => 7,
            'discount_percentage' => 40.00,
            'discounted_price' => 29.99,
            'image' => $getImageUrl('Nintendo Switch Sports'),
            'user_id' => 1,
        ]);

        // Beauty & Personal Care (Category 8)
        Product::create([
            'name' => 'Dyson Airwrap',
            'price' => 499.99,
            'description' => 'Revolutionize your hair styling with the Dyson Airwrap. Features 100% salon-quality results with 100% salon-quality results. 100% salon-quality results. 100% salon-quality results. 100% salon-quality results. 100% salon-quality results. 100% salon-quality results. 100% salon-quality results. 100% salon-quality results. 100% salon-quality results. 100% salon-quality results.',
            'stock' => 25,
            'category_id' => 8,
            'is_featured' => true,
            'discount_percentage' => 10.00,
            'discounted_price' => 449.99,
            'image' => $getImageUrl('Dyson Airwrap'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Oral-B iO Series 9',
            'price' => 199.99,
            'description' => 'Experience the ultimate in oral care with the Oral-B iO Series 9 electric toothbrush. Features 3D cleaning action that adapts to the shape of your teeth for deep cleaning. 7 cleaning modes for personalized care. Smartimer technology ensures brushing time is perfect every time. Bluetooth connectivity for smartphone app integration. 33,600 vibrations per minute for effective cleaning. 4 pressure sensor settings for gentle or deep cleaning. 3 intensity settings for customized care. 2-minute刷牙 timer and 30-second interval timer. 30-day battery life with quick charge. Includes travel case and charger. Compatible with Oral-B iO app for personalized care and brushing insights.',
            'stock' => 50,
            'category_id' => 8,
            'discount_percentage' => 10.00,
            'discounted_price' => 179.99,
            'image' => $getImageUrl('Oral-B iO Series 9'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Theragun Prime',
            'price' => 299.99,
            'description' => 'Elevate your recovery with the Theragun Prime percussion massage device. Features QuietForce Technology™ for whisper-quiet operation during powerful deep muscle treatment. Ergonomic multi-grip design allows easy reach to any area. Smart app integration provides guided routines and wellness tracking. Four unique attachments included for customized treatment: Standard Ball, Dampener, Thumb, and Cone. Five built-in speeds (1750-2400 PPM) for versatile use. 120-minute battery life per charge with internal lithium-ion battery. OLED screen displays speed and force meter. Bluetooth connectivity for seamless app connection. Deep muscle treatment up to 16mm depth. Perfect for pre-workout preparation, post-workout recovery, or daily wellness routine. Professional-grade durability with 2-year warranty. Includes protective carrying case.',
            'stock' => 40,
            'category_id' => 8,
            'discount_percentage' => 25.00,
            'discounted_price' => 224.99,
            'image' => $getImageUrl('Theragun Prime'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'GHD Platinum+ Styler',
            'price' => 279.99,
            'description' => 'Transform your hair styling with the GHD Platinum+ smart straightener. Features predictive ultra-zone technology that monitors heat 250 times per second for optimal styling temperature. Ultra-gloss plates with precision-milled floating design for snag-free styling. Automatically maintains consistent 365°F (185°C) temperature for optimal results. Wishbone hinge ensures perfect plate alignment. Universal voltage for worldwide use. Advanced heat sensor technology monitors heat distribution. Automatic sleep mode after 30 minutes of inactivity. 9-foot professional-length swivel cord. Heat-resistant protective plate guard included. Curved barrel design enables versatile styles from straight to waves and curls. Round barrel for creating curves and waves. 3-year manufacturer warranty. Includes heat-resistant travel case.',
            'stock' => 55,
            'category_id' => 8,
            'discount_percentage' => 20.00,
            'discounted_price' => 223.99,
            'image' => $getImageUrl('GHD Platinum+ Styler'),
            'user_id' => 1,
        ]);

        // Additional Electronics Items (Category 1)
        Product::create([
            'name' => 'Samsung Galaxy Watch 6',
            'price' => 399.99,
            'description' => 'Monitor your wellness journey with the Samsung Galaxy Watch 6. Features advanced BioActive Sensor for continuous heart rate, ECG, and body composition analysis. Beautiful Super AMOLED display with Always On feature and durable Gorilla Glass DX+. Advanced sleep coaching with detailed sleep stages and snoring detection. Auto workout tracking for over 90 different exercises. Built-in GPS and 5ATM + IP68 water resistance rating. LTE connectivity option for calls and messages without phone. Google Wear OS powered by Samsung with access to extensive app ecosystem. Battery life up to 40 hours with fast charging capability. Advanced fall detection and SOS messaging. Customizable watch faces and bands for personal style. Compatible with Android smartphones. Includes wireless charger and additional strap sizing.',
            'stock' => 65,
            'category_id' => 1,
            'discount_percentage' => 25.00,
            'discounted_price' => 299.99,
            'image' => $getImageUrl('Samsung Galaxy Watch 6'),
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'DJI Mini 3 Pro',
            'price' => 759.99,
            'description' => 'Capture stunning aerial footage with the DJI Mini 3 Pro drone. Features 4K/60fps video and 48MP photos with 1/1.3-inch CMOS sensor. Tri-directional obstacle sensing with APAS 4.0 for safer flight. Lightweight design under 249g requires no registration in many regions. Up to 34 minutes flight time with standard battery. True Vertical Shooting capability for social media content. Advanced features including MasterShots, QuickShots, and Hyperlapse. OcuSync 3.0 transmission system with 12km range. Automated flight modes including ActiveTrack 4.0 and Point of Interest 3.0. Includes DJI RC remote controller with built-in 5.5-inch HD display. Foldable design for enhanced portability. 3-axis mechanical gimbal for stable footage. Intelligent Return to Home feature. Includes spare propellers and carrying case.',
            'stock' => 30,
            'category_id' => 1,
            'discount_percentage' => 15.00,
            'discounted_price' => 645.99,
            'image' => $getImageUrl('DJI Mini 3 Pro'),
            'user_id' => 1,
        ]);
    }
}
