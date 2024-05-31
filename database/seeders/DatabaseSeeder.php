<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Corrected the namespace casing
use App\Models\Category; // Corrected the namespace casing
use App\Models\Buku; // Corrected the namespace casing

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();
        Buku::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Achmad Sidiq',
        //     'email' => 'sidiq@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Jangkung',
        //     'email' => 'Aji@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

    //     Buku::create([
    //         'title' => 'Ekonomi Teknik',
    //         'slug' => 'ekonomi-teknik',
    //         'excerpt' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, vel aliquam nam dolor obcaecati autem non quaerat vitae distinctio ea, est reprehenderit rem dignissimos alias. Exercitationem pariatur illo culpa, beatae voluptatibus corrupti ea sequi libero suscipit impedit itaque nobis ut?a",
    //         'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ipsam rerum facilis minima dignissimos modi labore? Alias, velit! Quo consequuntur id similique neque rerum distinctio aut quibusdam, suscipit nihil blanditiis quae maxime nulla harum perferen.dis nesciunt? Qui, distinctio. Harum error laborum corrupti consectetur alias nisi impedit porro sequi rem quis consequatur non at eligendi, rerum illum, cumque assumenda ea sed. Suscipit aperiam porro pariatur voluptates vitae corporis voluptate hic explicabo beatae quaerat distinctio animi, nulla, ab aliquid! Quae, rem repudiandae.",
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

    //     Buku::create([
    //         'title' => 'Kalkulus II',
    //         'slug' => 'kalkulus-ii',
    //         'excerpt' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, vel aliquam nam dolor obcaecati autem non quaerat vitae distinctio ea, est reprehenderit rem dignissimos alias. Exercitationem pariatur illo culpa, beatae voluptatibus corrupti ea sequi libero suscipit impedit itaque nobis ut?a",
    //         'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ipsam rerum facilis minima dignissimos modi labore? Alias, velit! Quo consequuntur id similique neque rerum distinctio aut quibusdam, suscipit nihil blanditiis quae maxime nulla harum perferen.dis nesciunt? Qui, distinctio. Harum error laborum corrupti consectetur alias nisi impedit porro sequi rem quis consequatur non at eligendi, rerum illum, cumque assumenda ea sed. Suscipit aperiam porro pariatur voluptates vitae corporis voluptate hic explicabo beatae quaerat distinctio animi, nulla, ab aliquid! Quae, rem repudiandae.",
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

    //     Buku::create([
    //         'title' => 'Fisika Dasar',
    //         'slug' => 'fisika-dasar',
    //         'excerpt' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, vel aliquam nam dolor obcaecati autem non quaerat vitae distinctio ea, est reprehenderit rem dignissimos alias. Exercitationem pariatur illo culpa, beatae voluptatibus corrupti ea sequi libero suscipit impedit itaque nobis ut?a",
    //         'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ipsam rerum facilis minima dignissimos modi labore? Alias, velit! Quo consequuntur id similique neque rerum distinctio aut quibusdam, suscipit nihil blanditiis quae maxime nulla harum perferen.dis nesciunt? Qui, distinctio. Harum error laborum corrupti consectetur alias nisi impedit porro sequi rem quis consequatur non at eligendi, rerum illum, cumque assumenda ea sed. Suscipit aperiam porro pariatur voluptates vitae corporis voluptate hic explicabo beatae quaerat distinctio animi, nulla, ab aliquid! Quae, rem repudiandae.",
    //         'category_id' => 2,
    //         'user_id' => 1
    //     ]);

    //     Buku::create([
    //         'title' => 'Fisika Dasar II',
    //         'slug' => 'fisika-dasar ii',
    //         'excerpt' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, vel aliquam nam dolor obcaecati autem non quaerat vitae distinctio ea, est reprehenderit rem dignissimos alias. Exercitationem pariatur illo culpa, beatae voluptatibus corrupti ea sequi libero suscipit impedit itaque nobis ut?a",
    //         'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ipsam rerum facilis minima dignissimos modi labore? Alias, velit! Quo consequuntur id similique neque rerum distinctio aut quibusdam, suscipit nihil blanditiis quae maxime nulla harum perferen.dis nesciunt? Qui, distinctio. Harum error laborum corrupti consectetur alias nisi impedit porro sequi rem quis consequatur non at eligendi, rerum illum, cumque assumenda ea sed. Suscipit aperiam porro pariatur voluptates vitae corporis voluptate hic explicabo beatae quaerat distinctio animi, nulla, ab aliquid! Quae, rem repudiandae.",
    //         'category_id' => 2,
    //         'user_id' => 2
    //     ]);
    }
}
