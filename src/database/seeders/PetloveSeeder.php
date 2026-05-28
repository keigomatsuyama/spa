<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Petlove;
class PetloveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Petlove::create([
    'title' => '仲良し犬猫',
    'description' => '癒されるお気に入り写真です。',
    'image' => 'お気に入り.jpg',
]);

Petlove::create([
    'title' => 'ドライブ',
    'description' => '一緒にお出かけ中の写真です。',
    'image' => 'お気に入り2.jpg',
]);

Petlove::create([
    'title' => 'ぎゅー',
    'description' => '仲良く抱きしめていて癒されます。',
    'image' => 'お気に入り3.jpg',
]);

Petlove::create([
    'title' => 'ぺろっ',
    'description' => '猫を優しく舐めていて可愛いです。',
    'image' => 'お気に入り4.jpg',
]);

Petlove::create([
    'title' => 'なかよし',
    'description' => 'ぺろぺろして仲良しです。',
    'image' => 'お気に入り5.jpg',
]);

Petlove::create([
    'title' => 'けんか？',
    'description' => '遊んでいるみたいで面白いです。',
    'image' => 'お気に入り6.jpg',
]);

Petlove::create([
    'title' => '甘えんぼ',
    'description' => '猫に甘えていて可愛いです。',
    'image' => 'お気に入り7.jpg',
]);

Petlove::create([
    'title' => 'すやすや',
    'description' => '一緒に寝ていて癒されます。',
    'image' => 'お気に入り8.jpg',
]);

Petlove::create([
    'title' => 'こんにちは',
    'description' => '見つめ合う可愛い瞬間です。',
    'image' => 'お気に入り9.jpg',
]);

Petlove::create([
    'title' => 'くっつき',
    'description' => '安心して寄り添っています。',
    'image' => 'お気に入り10.jpg',
]);
    }
}
