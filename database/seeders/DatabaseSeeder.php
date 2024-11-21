<?php

namespace Database\Seeders;

use App\Models\AdmissionAssistance;
use App\Models\HowToApply;
use App\Models\MediaHandles;
use App\Models\Posts;
use App\Models\SectionTexts;
use App\Models\Settings;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'yakubmuhammed51@gmail.com',
        ]);

        Settings::factory()->create([
            'name' => 'SarkcessConsults',
        ]);

        SectionTexts::factory()->create([
            'section_title' => 'our graduates',
            'section_sub_title' => 'Explore the world of',
            // 'slug' => 'yakubmuhammed51@gmail.com',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);

        SectionTexts::factory()->create([
            'section_title' => 'MBA Marketing',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);

        SectionTexts::factory()->create([
            'section_title' => 'Online MBA',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);

        SectionTexts::factory()->create([
            'section_title' => 'Edumart Online',
            'section_sub_title' => 'educational Portal',
            'slug' => 'https://www.youtube.com/watch?v=i11RXCJVEnw',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Building on Edumart Group’s rich experience with online MBA at Edumart University Online! Designing and delivering both graduate and post-graduate programs across a variety of disciplines, Edumart University Online, offering online MBA has worked upon the knowledge-base created by our highly qualified faculties, our research, publishing and training experience, to create online MBA programs that offer a rich learning experience.',
        ]);

        SectionTexts::factory()->create([
            'section_title' => 'How to Apply',
            'section_sub_title' => 'There are many ways to learn',
            // 'slug' => 'yakubmuhammed51@gmail.com',
            // 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);

        SectionTexts::factory()->create([
            'section_title' => 'Browse by courses',
            'section_sub_title' => 'What do you want to study abroad?',
            // 'slug' => 'yakubmuhammed51@gmail.com',
            // 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);

        SectionTexts::factory()->create([
            'section_title' => 'Browse by countries',
            'section_sub_title' => 'What do you want to study abroad?',
            // 'slug' => 'yakubmuhammed51@gmail.com',
            // 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);

        SectionTexts::factory()->create([
            'section_title' => 'Study Abroad Exams',
            'section_sub_title' => 'All You Need to Know About Entrance Exams to Study Abroad.',
            // 'slug' => 'yakubmuhammed51@gmail.com',
            // 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);

        SectionTexts::factory()->create([
            'section_title' => 'Application & Admission Assistance',
            // 'section_sub_title' => 'What do you want to study abroad?',
            // 'slug' => 'yakubmuhammed51@gmail.com',
            // 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);

        SectionTexts::factory()->create([
            'section_title' => 'News and events',
            'section_sub_title' => 'There are many ways to learn',
            // 'slug' => 'yakubmuhammed51@gmail.com',
            // 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);

        SectionTexts::factory()->create([
            'section_title' => 'Why Choose Us',
            'section_sub_title' => 'The Numbers Say it All',
            // 'slug' => 'yakubmuhammed51@gmail.com',
            // 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);

        SectionTexts::factory()->create([
            'section_title' => 'Alumini Testimonials',
            // 'section_sub_title' => 'What do you want to study abroad?',
            // 'slug' => 'yakubmuhammed51@gmail.com',
            // 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);

        HowToApply::factory()->create([
            'section_id' => 5,
            'step1' => 'REGISTRATION',
            'description1' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'step2' => 'DOCUMENTATION',
            'description2' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'step3' => 'Get started now',
            'description3' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
        ]);
        // post
        Posts::factory()->create([
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'status' => 'show',
        ]);

        AdmissionAssistance::factory()->create([
            'section_id' => 9,
            'post_id' => 1,
            'short_name' => 'SOP',
            'fullname' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);

        AdmissionAssistance::factory()->create([
            'section_id' => 9,
            'post_id' => 1,
            'short_name' => 'LOR',
            'fullname' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);

        AdmissionAssistance::factory()->create([
            'section_id' => 9,
            'post_id' => 1,
            'short_name' => 'CVV',
            'fullname' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);

        AdmissionAssistance::factory()->create([
            'section_id' => 9,
            'post_id' => 1,
            'short_name' => 'VISA',
            'fullname' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);


        MediaHandles::factory()->create([
            'twitter' => '#',
            'facebook' => '#',
            'gmail' => '#',
            'youtube' => '#',
            'insta' => '#',
        ]);
    }
}