<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id_category' => '1',
            'id_manufacturer' => '1',
            'name_product' => 'Samsung Galaxy A05 4GB 128GB',
            'quantity_product' => '960',
            'price_product' => '3090000',
            'image_address_product' => '1714729537.webp',
            'describe_product' => 'Đánh giá Samsung A05: thiết kế thời trang, hiệu năng ổn định Nhiều người dùng đã trải nghiệm cho đánh giá Samsung A05 sở hữu thiết kế thời trang và hiệu năng ổn định kết hợp với đó là dung lượng pin trâu mang tới cho người dùng trải nghiệm trọn vẹn nhất. Để biết thêm chi tiết về mẫu điện thoại mới thuộc series Samsung A giá rẻ này, mời bạn đọc tham khảo chi tiết về: thiết kế, màn hình, hiệu năng, camera và dung lượng pin.',
            'specifications' => '6.7 inch;MediaTek Helio G85;4GB;128GB;5000mAh;50MP+2MP;8.0 MP;Type-C;168.8 x 78.2 x 8.8 mm;Xanh Matcha, Bạc, Đen;',
        ]);

        DB::table('products')->insert([
            'id_category' => '2',
            'id_manufacturer' => '3',
            'name_product' => 'Nokia 110 4G Pro',
            'quantity_product' => '70',
            'price_product' => '710000',
            'image_address_product' => '1714730215.webp',
            'describe_product' => 'Điện thoại Nokia 110 4G Pro - Kiểu dáng bền bỉ, hiển thị rõ nét Nổi bật với thiết kế mới mẻ kết hợp với nhiều thông số kỹ thuật ấn tượng, Nokia 110 4G Pro được đánh giá là vượt trội hơn hẳn so với các dòng điện thoại phổ thông cùng phân khúc khác. Máy sở hữu kết nối 4G ổn định cùng dung lượng pin lớn, giúp bạn thoải mái trải nghiệm Internet nhanh chóng, thuận thiện mọi lúc, mọi nơi. Nếu bạn đang tìm kiếm một mẫu điện thoại đơn giản, đáng tin cậy thì Nokia 110 Pro 4G sẽ là gợi ý không nên bỏ qua nhé!',
            'specifications' => '1.77 inch;Unisoc T107;Không; 128 MB;1450mAh;160PMx120PM;Không;Micro USB;121.5 x 50 x 14.4 mm;Tím;',
        ]);

        DB::table('products')->insert([
            'id_category' => '1',
            'id_manufacturer' => '2',
            'name_product' => 'IPhone 15 Pro Max',
            'quantity_product' => '80',
            'price_product' => '29290000',
            'image_address_product' => '1714740820.webp',
            'describe_product' => 'Đánh giá điện thoại iPhone 15 Pro Max có gì mới iPhone 15 Pro Max đem lại một diện mạo hoàn toàn mới và sở hữu nhiều tính năng ưu việt cùng công nghệ tiên tiến. Hãy khám phá các đánh giá chi tiết về sản phẩm về khía cạnh thiết kế, màn hình, hiệu năng, thời lượng pin và bộ camera độc đáo qua các thông tin dưới đây!',
            'specifications' => '6.7 inch;Apple A17 Pro 6 nhân;8 GB;256 GB;4422 mAh;48MP;12MP;Type-C;159,9 x 76,7 x 8,25 mm;Titan trắng, titan đen, titan xanh và titan tự nhiên;',
        ]);
    }
}
