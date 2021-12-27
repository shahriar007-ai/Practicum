<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create( [
            'id'=>3,
            'title'=>'কম্পিউটার, ইন্টারনেট ও প্রোগ্রামিং',
            'slug'=>'computer-internet-and-programming',
            'short_desc'=>'This is computer, internet and programming category.',
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 00:04:01',
            'updated_at'=>'2021-12-24 07:04:34'
            ] );
                        
            Category::create( [
            'id'=>5,
            'title'=>'ফ্রিল্যান্সিং ও আউটসোর্সিং',
            'slug'=>'freelancing-and-outsourcing',
            'short_desc'=>NULL,
            'parent_id'=>3,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 00:22:45',
            'updated_at'=>'2021-12-24 00:22:45'
            ] );
                        
            Category::create( [
            'id'=>6,
            'title'=>'ইসলামি বই',
            'slug'=>'islamic-book',
            'short_desc'=>'This is Islamic book category.',
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 06:57:13',
            'updated_at'=>'2021-12-24 06:57:13'
            ] );
                        
            Category::create( [
            'id'=>7,
            'title'=>'সায়েন্স ফিকশন',
            'slug'=>'science-fiction',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:00:10',
            'updated_at'=>'2021-12-24 07:00:10'
            ] );
                        
            Category::create( [
            'id'=>8,
            'title'=>'ভ্রমন ও প্রবাস',
            'slug'=>'travel-and-expatriation',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:04:26',
            'updated_at'=>'2021-12-27 11:44:37'
            ] );
                        
            Category::create( [
            'id'=>9,
            'title'=>'মুক্তিযুদ্ধ',
            'slug'=>'liberation-war',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:05:33',
            'updated_at'=>'2021-12-24 07:05:33'
            ] );
                        
            Category::create( [
            'id'=>10,
            'title'=>'জীবনী, স্মৃতিচারণ ও সাক্ষাৎকার',
            'slug'=>'biographies-memoirs-and-interviews',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:06:58',
            'updated_at'=>'2021-12-24 07:06:58'
            ] );
                        
            Category::create( [
            'id'=>11,
            'title'=>'ব্যঙ্গ ও রম্যরচনা',
            'slug'=>'satire-and-comic',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:10:21',
            'updated_at'=>'2021-12-24 07:10:21'
            ] );
                        
            Category::create( [
            'id'=>12,
            'title'=>'আত্ম-উন্নয়ন, মোটিভেশনাল ও মেডিটেশন',
            'slug'=>'self-development-motivational-and-meditation',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:11:43',
            'updated_at'=>'2021-12-24 07:11:43'
            ] );
                        
            Category::create( [
            'id'=>13,
            'title'=>'শিশু-কিশোর বই',
            'slug'=>'childrens-books',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:17:08',
            'updated_at'=>'2021-12-24 07:17:08'
            ] );
                        
            Category::create( [
            'id'=>14,
            'title'=>'কমিক্স, নকশা ও ছবির গল্প',
            'slug'=>'comics-design-and-photo-story',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:18:20',
            'updated_at'=>'2021-12-24 07:18:20'
            ] );
                        
            Category::create( [
            'id'=>15,
            'title'=>'দর্শন',
            'slug'=>'philosophy',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:18:46',
            'updated_at'=>'2021-12-24 07:18:46'
            ] );
                        
            Category::create( [
            'id'=>16,
            'title'=>'রান্নাবান্না, খাদ্য ও পুষ্টি',
            'slug'=>'cooking-food-and-nutrition',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:19:58',
            'updated_at'=>'2021-12-24 07:19:58'
            ] );
                        
            Category::create( [
            'id'=>17,
            'title'=>'রাজনীতি',
            'slug'=>'politics',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:20:56',
            'updated_at'=>'2021-12-24 07:20:56'
            ] );
                        
            Category::create( [
            'id'=>18,
            'title'=>'রহস্য, গোয়েন্দা, ভৌতিক, থ্রিলার ও অ্যাডভেঞ্চার',
            'slug'=>'mystery-detective-ghost-thriller-adventure',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:22:02',
            'updated_at'=>'2021-12-24 07:22:02'
            ] );
                        
            Category::create( [
            'id'=>19,
            'title'=>'উপন্যাস',
            'slug'=>'novel',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:23:35',
            'updated_at'=>'2021-12-24 07:23:35'
            ] );
                        
            Category::create( [
            'id'=>20,
            'title'=>'ভাষা ও অভিধান',
            'slug'=>'languages-and-dictionaries',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:24:14',
            'updated_at'=>'2021-12-24 07:24:14'
            ] );
                        
            Category::create( [
            'id'=>21,
            'title'=>'ড্রয়িং, পেইন্টিং ডিজাইন ও ফটোগ্রাফি',
            'slug'=>'drawing-painting-design-and-photography',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:24:50',
            'updated_at'=>'2021-12-24 07:24:50'
            ] );
                        
            Category::create( [
            'id'=>22,
            'title'=>'ইতিহাস ও ঐতিহ্য',
            'slug'=>'history-and-tradition',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:25:21',
            'updated_at'=>'2021-12-24 07:25:21'
            ] );
                        
            Category::create( [
            'id'=>23,
            'title'=>'খেলাধুলা',
            'slug'=>'sports',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:26:48',
            'updated_at'=>'2021-12-24 07:26:48'
            ] );
                        
            Category::create( [
            'id'=>24,
            'title'=>'ছড়া, কবিতা ও আবৃত্তি',
            'slug'=>'rhymes-poems-recitations',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:27:25',
            'updated_at'=>'2021-12-24 07:27:25'
            ] );
                        
            Category::create( [
            'id'=>25,
            'title'=>'সমাজ, সভ্যতা ও সংস্কৃতি',
            'slug'=>'society-civilization-and-culture',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:27:57',
            'updated_at'=>'2021-12-24 07:27:57'
            ] );
                        
            Category::create( [
            'id'=>26,
            'title'=>'ইঞ্জিনিয়ারিং',
            'slug'=>'engineering',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:28:29',
            'updated_at'=>'2021-12-24 07:28:29'
            ] );
                        
            Category::create( [
            'id'=>27,
            'title'=>'গণিত, বিজ্ঞান ও প্রযুক্তি',
            'slug'=>'mathematics-science-and-technology',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:29:00',
            'updated_at'=>'2021-12-24 07:29:00'
            ] );
                        
            Category::create( [
            'id'=>28,
            'title'=>'ব্যবসা, বিনিয়োগ ও অর্থনীতি',
            'slug'=>'business-investment-and-economy',
            'short_desc'=>NULL,
            'parent_id'=>0,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-24 07:29:51',
            'updated_at'=>'2021-12-24 07:29:51'
            ] );
                        
            Category::create( [
            'id'=>29,
            'title'=>'কম্পিউটার হ্যাকিং',
            'slug'=>'computer-hacking',
            'short_desc'=>NULL,
            'parent_id'=>3,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:18:43',
            'updated_at'=>'2021-12-27 11:18:43'
            ] );
                        
            Category::create( [
            'id'=>30,
            'title'=>'ইন্টারনেট',
            'slug'=>'Internet',
            'short_desc'=>NULL,
            'parent_id'=>3,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:19:17',
            'updated_at'=>'2021-12-27 11:19:17'
            ] );
                        
            Category::create( [
            'id'=>31,
            'title'=>'গ্রাফিক্স ডিজাইন ও মাল্টিমিডিয়া',
            'slug'=>'graphics-design-and-multimedia',
            'short_desc'=>NULL,
            'parent_id'=>3,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:20:30',
            'updated_at'=>'2021-12-27 11:20:30'
            ] );
                        
            Category::create( [
            'id'=>32,
            'title'=>'ওয়েব ডিজাইন ও ডেভেলপমেন্ট',
            'slug'=>'web-design-and-development',
            'short_desc'=>NULL,
            'parent_id'=>3,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:21:10',
            'updated_at'=>'2021-12-27 11:21:10'
            ] );
                        
            Category::create( [
            'id'=>33,
            'title'=>'এস ই ও',
            'slug'=>'seo',
            'short_desc'=>NULL,
            'parent_id'=>3,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:21:34',
            'updated_at'=>'2021-12-27 11:21:34'
            ] );
                        
            Category::create( [
            'id'=>34,
            'title'=>'সফটওয়্যার',
            'slug'=>'software',
            'short_desc'=>NULL,
            'parent_id'=>3,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:22:03',
            'updated_at'=>'2021-12-27 11:22:03'
            ] );
                        
            Category::create( [
            'id'=>35,
            'title'=>'হার্ডওয়্যার ও ট্রাবলশুটিং',
            'slug'=>'hardware-and-troubleshooting',
            'short_desc'=>NULL,
            'parent_id'=>3,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:22:37',
            'updated_at'=>'2021-12-27 11:22:37'
            ] );
                        
            Category::create( [
            'id'=>36,
            'title'=>'মাইক্রোসফট অফিস',
            'slug'=>'microsoft-office',
            'short_desc'=>NULL,
            'parent_id'=>3,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:23:24',
            'updated_at'=>'2021-12-27 11:23:24'
            ] );
                        
            Category::create( [
            'id'=>37,
            'title'=>'ছোটদের কম্পিউটার শিক্ষা',
            'slug'=>'computer-learning-book-for-children',
            'short_desc'=>NULL,
            'parent_id'=>3,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:24:07',
            'updated_at'=>'2021-12-27 11:24:07'
            ] );
                        
            Category::create( [
            'id'=>38,
            'title'=>'অপারেটিং সিস্টেম',
            'slug'=>'operating-system',
            'short_desc'=>NULL,
            'parent_id'=>3,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:24:33',
            'updated_at'=>'2021-12-27 11:24:33'
            ] );
                        
            Category::create( [
            'id'=>39,
            'title'=>'নেটওয়ার্কিং',
            'slug'=>'networking',
            'short_desc'=>NULL,
            'parent_id'=>3,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:24:55',
            'updated_at'=>'2021-12-27 11:24:55'
            ] );
                        
            Category::create( [
            'id'=>40,
            'title'=>'ম্যানেজমেন্ট ইনফরমেশন সিস্টেম (এম আই এস)',
            'slug'=>'management-Information-system',
            'short_desc'=>NULL,
            'parent_id'=>3,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:25:26',
            'updated_at'=>'2021-12-27 11:25:26'
            ] );
                        
            Category::create( [
            'id'=>41,
            'title'=>'সিস্টেম অ্যাডমিনিসট্রেশন',
            'slug'=>'system-administration',
            'short_desc'=>NULL,
            'parent_id'=>3,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:25:49',
            'updated_at'=>'2021-12-27 11:25:49'
            ] );
                        
            Category::create( [
            'id'=>42,
            'title'=>'তথ্য ও প্রযুক্তি',
            'slug'=>'information-and-technology',
            'short_desc'=>NULL,
            'parent_id'=>3,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:26:26',
            'updated_at'=>'2021-12-27 11:26:26'
            ] );
                        
            Category::create( [
            'id'=>43,
            'title'=>'কুরআন ও তাফসীর',
            'slug'=>'quran-and-tafsir',
            'short_desc'=>NULL,
            'parent_id'=>6,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:27:28',
            'updated_at'=>'2021-12-27 11:27:28'
            ] );
                        
            Category::create( [
            'id'=>44,
            'title'=>'হাদিস ও সুন্নাত',
            'slug'=>'hadith-and-sunnah',
            'short_desc'=>NULL,
            'parent_id'=>6,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:28:04',
            'updated_at'=>'2021-12-27 11:28:04'
            ] );
                        
            Category::create( [
            'id'=>45,
            'title'=>'কুরআন বিষয়ক আলোচনা',
            'slug'=>'discussion-on-quran',
            'short_desc'=>NULL,
            'parent_id'=>6,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:28:42',
            'updated_at'=>'2021-12-27 11:28:42'
            ] );
                        
            Category::create( [
            'id'=>46,
            'title'=>'হাদিস বিষয়ক আলোচনা',
            'slug'=>'discussion-on-hadith',
            'short_desc'=>NULL,
            'parent_id'=>6,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:29:16',
            'updated_at'=>'2021-12-27 11:29:16'
            ] );
                        
            Category::create( [
            'id'=>47,
            'title'=>'সীরাতে রাসুল',
            'slug'=>'rasul-in-sirat',
            'short_desc'=>NULL,
            'parent_id'=>6,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:30:11',
            'updated_at'=>'2021-12-27 11:30:11'
            ] );
                        
            Category::create( [
            'id'=>48,
            'title'=>'সালাত/নামায',
            'slug'=>'Salat',
            'short_desc'=>NULL,
            'parent_id'=>6,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:30:50',
            'updated_at'=>'2021-12-27 11:30:50'
            ] );
                        
            Category::create( [
            'id'=>49,
            'title'=>'আরবি শিক্ষা',
            'slug'=>'arabic-education',
            'short_desc'=>NULL,
            'parent_id'=>6,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:31:28',
            'updated_at'=>'2021-12-27 11:31:28'
            ] );
                        
            Category::create( [
            'id'=>50,
            'title'=>'ইসলাম ও সমকালীন বিশ্ব',
            'slug'=>'islam-and-the-contemporary-world',
            'short_desc'=>NULL,
            'parent_id'=>6,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:32:12',
            'updated_at'=>'2021-12-27 11:32:12'
            ] );
                        
            Category::create( [
            'id'=>51,
            'title'=>'ইসলাম ও বিজ্ঞান',
            'slug'=>'islam-and-science',
            'short_desc'=>NULL,
            'parent_id'=>6,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:32:55',
            'updated_at'=>'2021-12-27 11:32:55'
            ] );
                        
            Category::create( [
            'id'=>52,
            'title'=>'ইসলামি দর্শন',
            'slug'=>'islamic-philosophy',
            'short_desc'=>NULL,
            'parent_id'=>3,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:33:25',
            'updated_at'=>'2021-12-27 11:33:25'
            ] );
                        
            Category::create( [
            'id'=>53,
            'title'=>'মুসলিম ব্যক্তিত্ব',
            'slug'=>'muslim-personality',
            'short_desc'=>NULL,
            'parent_id'=>6,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:34:02',
            'updated_at'=>'2021-12-27 11:34:02'
            ] );
                        
            Category::create( [
            'id'=>54,
            'title'=>'অনুবাদ সায়েন্স ফিকশন',
            'slug'=>'translation-science-fiction',
            'short_desc'=>NULL,
            'parent_id'=>7,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:35:10',
            'updated_at'=>'2021-12-27 11:35:10'
            ] );
                        
            Category::create( [
            'id'=>55,
            'title'=>'সায়েন্স ফিকশন সমগ্র/সংকলন',
            'slug'=>'science-fiction-whole-compilation',
            'short_desc'=>NULL,
            'parent_id'=>7,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:36:06',
            'updated_at'=>'2021-12-27 11:36:06'
            ] );
                        
            Category::create( [
            'id'=>56,
            'title'=>'ইউরোপ ভ্রমন',
            'slug'=>'travel-to-europe',
            'short_desc'=>NULL,
            'parent_id'=>8,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:39:46',
            'updated_at'=>'2021-12-27 11:39:46'
            ] );
                        
            Category::create( [
            'id'=>57,
            'title'=>'প্রবাস জীবন',
            'slug'=>'expatriate-life',
            'short_desc'=>NULL,
            'parent_id'=>8,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:40:42',
            'updated_at'=>'2021-12-27 11:40:42'
            ] );
                        
            Category::create( [
            'id'=>58,
            'title'=>'ট্রাভেল গাইড',
            'slug'=>'travel-guide',
            'short_desc'=>NULL,
            'parent_id'=>8,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:45:10',
            'updated_at'=>'2021-12-27 11:45:10'
            ] );
                        
            Category::create( [
            'id'=>59,
            'title'=>'নানাদেশ ও ভ্রমন',
            'slug'=>'various-countries-and-travel',
            'short_desc'=>NULL,
            'parent_id'=>8,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:45:44',
            'updated_at'=>'2021-12-27 11:45:44'
            ] );
                        
            Category::create( [
            'id'=>60,
            'title'=>'ভ্রমণ ও প্রবাস: ক্লাসিক',
            'slug'=>'travel-and-expatriation-classic',
            'short_desc'=>NULL,
            'parent_id'=>8,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:46:45',
            'updated_at'=>'2021-12-27 11:47:16'
            ] );
                        
            Category::create( [
            'id'=>61,
            'title'=>'মুক্তিযুদ্ধভিত্তিক সাহিত্য',
            'slug'=>'liberation-war-based-literature',
            'short_desc'=>NULL,
            'parent_id'=>9,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:48:04',
            'updated_at'=>'2021-12-27 11:48:04'
            ] );
                        
            Category::create( [
            'id'=>62,
            'title'=>'মুক্তিযুদ্ধের ইতিহাস',
            'slug'=>'history-of-the-liberation-war',
            'short_desc'=>NULL,
            'parent_id'=>9,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:48:49',
            'updated_at'=>'2021-12-27 11:48:49'
            ] );
                        
            Category::create( [
            'id'=>63,
            'title'=>'রাজনৈতিক ব্যক্তিত্ব',
            'slug'=>'political-personality',
            'short_desc'=>NULL,
            'parent_id'=>10,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:49:19',
            'updated_at'=>'2021-12-27 11:49:19'
            ] );
                        
            Category::create( [
            'id'=>64,
            'title'=>'সাহিত্যিক, শিল্প ও সংগীত ব্যক্তিত্ব',
            'slug'=>'literary-artistic-and-musical-personalities',
            'short_desc'=>NULL,
            'parent_id'=>10,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:50:35',
            'updated_at'=>'2021-12-27 11:50:35'
            ] );
                        
            Category::create( [
            'id'=>65,
            'title'=>'ক্রীড়া ব্যক্তিত্ব',
            'slug'=>'sports-personality',
            'short_desc'=>NULL,
            'parent_id'=>10,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:51:03',
            'updated_at'=>'2021-12-27 11:51:03'
            ] );
                        
            Category::create( [
            'id'=>66,
            'title'=>'ঐতিহাসিক ব্যক্তিত্ব',
            'slug'=>'historical-personality',
            'short_desc'=>NULL,
            'parent_id'=>10,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:51:29',
            'updated_at'=>'2021-12-27 11:51:29'
            ] );
                        
            Category::create( [
            'id'=>67,
            'title'=>'বিজ্ঞানী',
            'slug'=>'scientist',
            'short_desc'=>NULL,
            'parent_id'=>10,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:52:00',
            'updated_at'=>'2021-12-27 11:52:00'
            ] );
                        
            Category::create( [
            'id'=>68,
            'title'=>'দার্শনিক',
            'slug'=>'philosopher',
            'short_desc'=>NULL,
            'parent_id'=>10,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:53:22',
            'updated_at'=>'2021-12-27 11:53:53'
            ] );
                        
            Category::create( [
            'id'=>69,
            'title'=>'বিখ্যাত ব্যক্তি',
            'slug'=>'famous-people',
            'short_desc'=>NULL,
            'parent_id'=>10,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:54:40',
            'updated_at'=>'2021-12-27 11:54:40'
            ] );
                        
            Category::create( [
            'id'=>70,
            'title'=>'জীবনী ও স্মৃতিচারণ: বিবিধ',
            'slug'=>'biographies-and-memoirs-miscellaneous',
            'short_desc'=>NULL,
            'parent_id'=>10,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:55:14',
            'updated_at'=>'2021-12-27 11:55:14'
            ] );
                        
            Category::create( [
            'id'=>71,
            'title'=>'স্মৃতিচারণ, স্মারক ও সাক্ষাৎকার',
            'slug'=>'memoirs-memorabilia-and-interviews',
            'short_desc'=>NULL,
            'parent_id'=>10,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:58:33',
            'updated_at'=>'2021-12-27 11:58:33'
            ] );
                        
            Category::create( [
            'id'=>72,
            'title'=>'শিক্ষাবিদ',
            'slug'=>'academician',
            'short_desc'=>NULL,
            'parent_id'=>10,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:59:10',
            'updated_at'=>'2021-12-27 11:59:10'
            ] );
                        
            Category::create( [
            'id'=>73,
            'title'=>'নারী জীবনী',
            'slug'=>'womens-biography',
            'short_desc'=>NULL,
            'parent_id'=>10,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 11:59:37',
            'updated_at'=>'2021-12-27 11:59:37'
            ] );
                        
            Category::create( [
            'id'=>74,
            'title'=>'কৌতুক',
            'slug'=>'prank',
            'short_desc'=>NULL,
            'parent_id'=>11,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:00:04',
            'updated_at'=>'2021-12-27 12:00:04'
            ] );
                        
            Category::create( [
            'id'=>75,
            'title'=>'রম্য সাহিত্য',
            'slug'=>'delightful-literature',
            'short_desc'=>NULL,
            'parent_id'=>11,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:00:37',
            'updated_at'=>'2021-12-27 12:00:37'
            ] );
                        
            Category::create( [
            'id'=>76,
            'title'=>'আইকিউ, ধাঁধাঁ, বুদ্ধির খেলা,',
            'slug'=>'iq-puzzle-game-of-thrones',
            'short_desc'=>NULL,
            'parent_id'=>11,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:01:46',
            'updated_at'=>'2021-12-27 12:01:46'
            ] );
                        
            Category::create( [
            'id'=>77,
            'title'=>'উদ্যোক্তা',
            'slug'=>'entrepreneur',
            'short_desc'=>NULL,
            'parent_id'=>12,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:02:13',
            'updated_at'=>'2021-12-27 12:02:13'
            ] );
                        
            Category::create( [
            'id'=>78,
            'title'=>'আত্ম উন্নয়ন ও মোটিভেশন',
            'slug'=>'self-development-and-motivation',
            'short_desc'=>NULL,
            'parent_id'=>12,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:02:43',
            'updated_at'=>'2021-12-27 12:02:43'
            ] );
                        
            Category::create( [
            'id'=>79,
            'title'=>'মেডিটেশন ও ইয়োগা',
            'slug'=>'meditation-and-yoga',
            'short_desc'=>NULL,
            'parent_id'=>12,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:03:17',
            'updated_at'=>'2021-12-27 12:03:17'
            ] );
                        
            Category::create( [
            'id'=>80,
            'title'=>'ক্যারিয়ার উন্নয়ন',
            'slug'=>'career-development',
            'short_desc'=>NULL,
            'parent_id'=>12,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:03:57',
            'updated_at'=>'2021-12-27 12:03:57'
            ] );
                        
            Category::create( [
            'id'=>81,
            'title'=>'বিষয় ভিত্তিক বই',
            'slug'=>'subject-based-books',
            'short_desc'=>NULL,
            'parent_id'=>13,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:04:30',
            'updated_at'=>'2021-12-27 12:04:30'
            ] );
                        
            Category::create( [
            'id'=>82,
            'title'=>'শিক্ষা উপকরণ',
            'slug'=>'educational-materials',
            'short_desc'=>NULL,
            'parent_id'=>13,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:05:02',
            'updated_at'=>'2021-12-27 12:05:02'
            ] );
                        
            Category::create( [
            'id'=>83,
            'title'=>'শিশু-কিশোর কমিক্স বই',
            'slug'=>'childrens-and-teen-comics-books',
            'short_desc'=>NULL,
            'parent_id'=>14,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:05:45',
            'updated_at'=>'2021-12-27 12:05:45'
            ] );
                        
            Category::create( [
            'id'=>84,
            'title'=>'প্রাচীন দর্শন',
            'slug'=>'ancient-philosophy',
            'short_desc'=>NULL,
            'parent_id'=>15,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:06:09',
            'updated_at'=>'2021-12-27 12:06:09'
            ] );
                        
            Category::create( [
            'id'=>85,
            'title'=>'মধ্যযুগীয় দর্শন',
            'slug'=>'medieval-philosophy',
            'short_desc'=>NULL,
            'parent_id'=>15,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:06:35',
            'updated_at'=>'2021-12-27 12:06:35'
            ] );
                        
            Category::create( [
            'id'=>86,
            'title'=>'আধুনিক দর্শন',
            'slug'=>'modern-philosophy',
            'short_desc'=>NULL,
            'parent_id'=>15,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:06:59',
            'updated_at'=>'2021-12-27 12:06:59'
            ] );
                        
            Category::create( [
            'id'=>87,
            'title'=>'আধ্যাত্মিকতা ও সূফিবাদ',
            'slug'=>'spirituality-and-sufism',
            'short_desc'=>NULL,
            'parent_id'=>15,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:07:32',
            'updated_at'=>'2021-12-27 12:07:32'
            ] );
                        
            Category::create( [
            'id'=>88,
            'title'=>'পাশ্চাত্য দর্শন',
            'slug'=>'western-philosophy',
            'short_desc'=>NULL,
            'parent_id'=>15,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:07:54',
            'updated_at'=>'2021-12-27 12:07:54'
            ] );
                        
            Category::create( [
            'id'=>89,
            'title'=>'রাজনৈতিক দর্শন',
            'slug'=>'political-philosophy',
            'short_desc'=>NULL,
            'parent_id'=>15,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:08:16',
            'updated_at'=>'2021-12-27 12:08:16'
            ] );
                        
            Category::create( [
            'id'=>90,
            'title'=>'নৈতিকতাবোধ',
            'slug'=>'morality',
            'short_desc'=>NULL,
            'parent_id'=>15,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:08:40',
            'updated_at'=>'2021-12-27 12:08:40'
            ] );
                        
            Category::create( [
            'id'=>91,
            'title'=>'জীবনদর্শন',
            'slug'=>'life-philosophy',
            'short_desc'=>NULL,
            'parent_id'=>15,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:09:01',
            'updated_at'=>'2021-12-27 12:09:01'
            ] );
                        
            Category::create( [
            'id'=>92,
            'title'=>'রেসিপি',
            'slug'=>'recipe',
            'short_desc'=>NULL,
            'parent_id'=>16,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:10:16',
            'updated_at'=>'2021-12-27 12:10:16'
            ] );
                        
            Category::create( [
            'id'=>93,
            'title'=>'রান্না, খাদ্য ও পুষ্টি বিষয়ক বিবিধ বই',
            'slug'=>'miscellaneous-books-on-cooking-food-and-nutrition',
            'short_desc'=>NULL,
            'parent_id'=>16,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:11:06',
            'updated_at'=>'2021-12-27 12:11:06'
            ] );
                        
            Category::create( [
            'id'=>94,
            'title'=>'শাসনব্যবস্থা',
            'slug'=>'governance',
            'short_desc'=>NULL,
            'parent_id'=>17,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:11:32',
            'updated_at'=>'2021-12-27 12:11:32'
            ] );
                        
            Category::create( [
            'id'=>95,
            'title'=>'বিপ্লব ও বিদ্রোহ',
            'slug'=>'revolution-and-rebellion',
            'short_desc'=>NULL,
            'parent_id'=>17,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:12:04',
            'updated_at'=>'2021-12-27 12:12:04'
            ] );
                        
            Category::create( [
            'id'=>96,
            'title'=>'রাজনীতিঃ ভারতীয় উপমহাদেশ',
            'slug'=>'politics-indian-subcontinent',
            'short_desc'=>NULL,
            'parent_id'=>17,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:12:42',
            'updated_at'=>'2021-12-27 12:12:42'
            ] );
                        
            Category::create( [
            'id'=>97,
            'title'=>'আন্তর্জাতিক রাজনীতি',
            'slug'=>'international-politics',
            'short_desc'=>NULL,
            'parent_id'=>17,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:13:09',
            'updated_at'=>'2021-12-27 12:13:09'
            ] );
                        
            Category::create( [
            'id'=>98,
            'title'=>'রাজনৈতিক সমালোচনা ও কলাম সংকলন',
            'slug'=>'collection-of-political-criticism-and-columns',
            'short_desc'=>NULL,
            'parent_id'=>17,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:13:53',
            'updated_at'=>'2021-12-27 12:13:53'
            ] );
                        
            Category::create( [
            'id'=>99,
            'title'=>'রাজনৈতিক দ্বন্দ্ব, যুদ্ধবিগ্রহ ও গণহত্যা',
            'slug'=>'political-conflicts-wars-and-genocide',
            'short_desc'=>NULL,
            'parent_id'=>17,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:14:33',
            'updated_at'=>'2021-12-27 12:14:33'
            ] );
                        
            Category::create( [
            'id'=>100,
            'title'=>'ডিটেকটিভ, ইন্টেলিজেন্স ও সিক্রেট এজেন্সি',
            'slug'=>'detective-intelligence-and-secret-agency',
            'short_desc'=>NULL,
            'parent_id'=>17,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:15:09',
            'updated_at'=>'2021-12-27 12:15:09'
            ] );
                        
            Category::create( [
            'id'=>101,
            'title'=>'রাজনৈতিক গবেষণা ও প্রবন্ধ',
            'slug'=>'political-research-and-essays',
            'short_desc'=>NULL,
            'parent_id'=>17,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:15:41',
            'updated_at'=>'2021-12-27 12:15:41'
            ] );
                        
            Category::create( [
            'id'=>102,
            'title'=>'যুদ্ধকৌশল ও পররাষ্ট্র নীতি',
            'slug'=>'war-strategy-and-foreign-policy',
            'short_desc'=>NULL,
            'parent_id'=>17,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:16:16',
            'updated_at'=>'2021-12-27 12:16:16'
            ] );
                        
            Category::create( [
            'id'=>103,
            'title'=>'রহস্য ও গোয়েন্দা',
            'slug'=>'mystery-and-detective',
            'short_desc'=>NULL,
            'parent_id'=>18,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:17:01',
            'updated_at'=>'2021-12-27 12:17:01'
            ] );
                        
            Category::create( [
            'id'=>104,
            'title'=>'অতিপ্রাকৃত ও ভৌতিক',
            'slug'=>'supernatural-and-ghostly',
            'short_desc'=>NULL,
            'parent_id'=>18,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:17:26',
            'updated_at'=>'2021-12-27 12:17:26'
            ] );
                        
            Category::create( [
            'id'=>105,
            'title'=>'থ্রিলার',
            'slug'=>'thriller',
            'short_desc'=>NULL,
            'parent_id'=>18,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:17:46',
            'updated_at'=>'2021-12-27 12:17:46'
            ] );
                        
            Category::create( [
            'id'=>106,
            'title'=>'অ্যাডভেঞ্চার',
            'slug'=>'adventure',
            'short_desc'=>NULL,
            'parent_id'=>18,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:18:09',
            'updated_at'=>'2021-12-27 12:18:09'
            ] );
                        
            Category::create( [
            'id'=>107,
            'title'=>'পৌরানিক ও কিংবদন্তী',
            'slug'=>'myths-and-legends',
            'short_desc'=>NULL,
            'parent_id'=>18,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:18:36',
            'updated_at'=>'2021-12-27 12:18:36'
            ] );
                        
            Category::create( [
            'id'=>108,
            'title'=>'সমকালীন উপন্যাস',
            'slug'=>'contemporary-novel',
            'short_desc'=>NULL,
            'parent_id'=>19,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:19:08',
            'updated_at'=>'2021-12-27 12:19:08'
            ] );
                        
            Category::create( [
            'id'=>109,
            'title'=>'চিরায়ত উপন্যাস',
            'slug'=>'classic-novel',
            'short_desc'=>NULL,
            'parent_id'=>19,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:19:34',
            'updated_at'=>'2021-12-27 12:19:34'
            ] );
                        
            Category::create( [
            'id'=>110,
            'title'=>'রোমান্টিক উপন্যাস',
            'slug'=>'novel-romance',
            'short_desc'=>NULL,
            'parent_id'=>19,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:21:08',
            'updated_at'=>'2021-12-27 12:21:08'
            ] );
                        
            Category::create( [
            'id'=>111,
            'title'=>'রাজনৈতিক ও মুক্তিযুদ্ধভিত্তিক উপন্যাস',
            'slug'=>'novel-political-and-liberation-war',
            'short_desc'=>NULL,
            'parent_id'=>19,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:21:52',
            'updated_at'=>'2021-12-27 12:21:52'
            ] );
                        
            Category::create( [
            'id'=>112,
            'title'=>'শিশু-কিশোর উপন্যাস',
            'slug'=>'novel-children-and-teens',
            'short_desc'=>NULL,
            'parent_id'=>19,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:22:43',
            'updated_at'=>'2021-12-27 12:22:43'
            ] );
                        
            Category::create( [
            'id'=>113,
            'title'=>'থ্রিলার ও অ্যাডভেঞ্চার উপন্যাস',
            'slug'=>'novel-thriller-and-adventure',
            'short_desc'=>NULL,
            'parent_id'=>19,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:23:59',
            'updated_at'=>'2021-12-27 12:23:59'
            ] );
                        
            Category::create( [
            'id'=>114,
            'title'=>'ঐতিহাসিক উপন্যাস',
            'slug'=>'historical-novel',
            'short_desc'=>NULL,
            'parent_id'=>19,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:24:23',
            'updated_at'=>'2021-12-27 12:24:23'
            ] );
                        
            Category::create( [
            'id'=>115,
            'title'=>'ইসলামি উপন্যাস',
            'slug'=>'islamic-novel',
            'short_desc'=>NULL,
            'parent_id'=>19,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:24:49',
            'updated_at'=>'2021-12-27 12:24:49'
            ] );
                        
            Category::create( [
            'id'=>116,
            'title'=>'অনুবাদ উপন্যাস',
            'slug'=>'translated-novel',
            'short_desc'=>NULL,
            'parent_id'=>19,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:25:14',
            'updated_at'=>'2021-12-27 12:25:14'
            ] );
                        
            Category::create( [
            'id'=>117,
            'title'=>'উপন্যাস সংকলন ও সমগ্র',
            'slug'=>'novel-compilation',
            'short_desc'=>NULL,
            'parent_id'=>19,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:25:48',
            'updated_at'=>'2021-12-27 12:25:48'
            ] );
                        
            Category::create( [
            'id'=>118,
            'title'=>'রম্য উপন্যাস',
            'slug'=>'humor-novel',
            'short_desc'=>NULL,
            'parent_id'=>19,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:26:21',
            'updated_at'=>'2021-12-27 12:26:21'
            ] );
                        
            Category::create( [
            'id'=>119,
            'title'=>'প্যারাসাইকোলজিকাল উপন্যাস',
            'slug'=>'para-psychological-novel',
            'short_desc'=>NULL,
            'parent_id'=>19,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:26:58',
            'updated_at'=>'2021-12-27 12:26:58'
            ] );
                        
            Category::create( [
            'id'=>120,
            'title'=>'রহস্য ও গোয়েন্দা উপন্যাস',
            'slug'=>'novel-mystery-and-detective',
            'short_desc'=>NULL,
            'parent_id'=>19,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:27:27',
            'updated_at'=>'2021-12-27 12:27:27'
            ] );
                        
            Category::create( [
            'id'=>121,
            'title'=>'ইংরেজি ভাষার উপন্যাস',
            'slug'=>'novel-english-language',
            'short_desc'=>NULL,
            'parent_id'=>19,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:27:55',
            'updated_at'=>'2021-12-27 12:27:55'
            ] );
                        
            Category::create( [
            'id'=>122,
            'title'=>'ভাষা শিক্ষা ও ব্যাকরণ',
            'slug'=>'language-education-and-grammar',
            'short_desc'=>NULL,
            'parent_id'=>20,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:28:29',
            'updated_at'=>'2021-12-27 12:28:29'
            ] );
                        
            Category::create( [
            'id'=>123,
            'title'=>'ভাষা বিষয়ক গবেষণা, প্রবন্ধ ও সমালোচনা',
            'slug'=>'language-research-essays-and-critiques',
            'short_desc'=>NULL,
            'parent_id'=>20,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:29:07',
            'updated_at'=>'2021-12-27 12:29:07'
            ] );
                        
            Category::create( [
            'id'=>124,
            'title'=>'অভিধান',
            'slug'=>'dictionary',
            'short_desc'=>NULL,
            'parent_id'=>20,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:29:29',
            'updated_at'=>'2021-12-27 12:29:29'
            ] );
                        
            Category::create( [
            'id'=>125,
            'title'=>'ড্রয়িং অ্যান্ড পেইন্টিং',
            'slug'=>'drawing-and-painting',
            'short_desc'=>NULL,
            'parent_id'=>21,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:30:00',
            'updated_at'=>'2021-12-27 12:30:00'
            ] );
                        
            Category::create( [
            'id'=>126,
            'title'=>'ফটোগ্রাফি',
            'slug'=>'Photography',
            'short_desc'=>NULL,
            'parent_id'=>21,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:30:51',
            'updated_at'=>'2021-12-27 12:30:51'
            ] );
                        
            Category::create( [
            'id'=>127,
            'title'=>'প্রাচীন সভ্যতার ইতিহাস',
            'slug'=>'history-of-ancient-civilization',
            'short_desc'=>NULL,
            'parent_id'=>22,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:31:43',
            'updated_at'=>'2021-12-27 12:31:43'
            ] );
                        
            Category::create( [
            'id'=>128,
            'title'=>'ভারতীয় উপমহাদেশের ইতিহাস',
            'slug'=>'history-of-the-indian-subcontinent',
            'short_desc'=>NULL,
            'parent_id'=>22,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:32:25',
            'updated_at'=>'2021-12-27 12:32:25'
            ] );
                        
            Category::create( [
            'id'=>129,
            'title'=>'উপনিবেশিক শাসনামল ও ভারত বিভাগ',
            'slug'=>'colonial-period-and-division-of-india',
            'short_desc'=>NULL,
            'parent_id'=>22,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:33:02',
            'updated_at'=>'2021-12-27 12:33:02'
            ] );
                        
            Category::create( [
            'id'=>130,
            'title'=>'এশিয়া',
            'slug'=>'asia',
            'short_desc'=>NULL,
            'parent_id'=>22,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:33:23',
            'updated_at'=>'2021-12-27 12:33:23'
            ] );
                        
            Category::create( [
            'id'=>131,
            'title'=>'ইউরোপ',
            'slug'=>'europe',
            'short_desc'=>NULL,
            'parent_id'=>22,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:33:54',
            'updated_at'=>'2021-12-27 12:33:54'
            ] );
                        
            Category::create( [
            'id'=>132,
            'title'=>'আফ্রিকার ইতিহাস',
            'slug'=>'history-of-africa',
            'short_desc'=>NULL,
            'parent_id'=>22,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:34:21',
            'updated_at'=>'2021-12-27 12:34:21'
            ] );
                        
            Category::create( [
            'id'=>133,
            'title'=>'আমেরিকা',
            'slug'=>'america',
            'short_desc'=>NULL,
            'parent_id'=>22,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:34:53',
            'updated_at'=>'2021-12-27 12:34:53'
            ] );
                        
            Category::create( [
            'id'=>134,
            'title'=>'মুসলিম ইতিহাস',
            'slug'=>'muslim-history',
            'short_desc'=>NULL,
            'parent_id'=>22,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:35:19',
            'updated_at'=>'2021-12-27 12:35:19'
            ] );
                        
            Category::create( [
            'id'=>135,
            'title'=>'ইতিহাস: মুক্তিযুদ্ধ',
            'slug'=>'history-liberation-war',
            'short_desc'=>NULL,
            'parent_id'=>22,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:36:12',
            'updated_at'=>'2021-12-27 12:36:12'
            ] );
                        
            Category::create( [
            'id'=>136,
            'title'=>'ইতিহাস: শিল্পকলা ও সাহিত্য',
            'slug'=>'history-art-and-literature',
            'short_desc'=>NULL,
            'parent_id'=>22,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:36:47',
            'updated_at'=>'2021-12-27 12:36:47'
            ] );
                        
            Category::create( [
            'id'=>137,
            'title'=>'ইতিহাস: সামরিক ও যুদ্ধ বিগ্রহ',
            'slug'=>'history-military-and-war-wars',
            'short_desc'=>NULL,
            'parent_id'=>22,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:37:38',
            'updated_at'=>'2021-12-27 12:37:38'
            ] );
                        
            Category::create( [
            'id'=>138,
            'title'=>'রাজনৈতিক ইতিহাস',
            'slug'=>'political-history',
            'short_desc'=>NULL,
            'parent_id'=>22,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:38:05',
            'updated_at'=>'2021-12-27 12:38:05'
            ] );
                        
            Category::create( [
            'id'=>139,
            'title'=>'প্রত্নতাত্তিক ইতিহাস',
            'slug'=>'archaeological-history',
            'short_desc'=>NULL,
            'parent_id'=>22,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:38:36',
            'updated_at'=>'2021-12-27 12:38:36'
            ] );
                        
            Category::create( [
            'id'=>140,
            'title'=>'ভৌগলিক ইতিহাস',
            'slug'=>'geographical-history',
            'short_desc'=>NULL,
            'parent_id'=>22,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:39:02',
            'updated_at'=>'2021-12-27 12:39:02'
            ] );
                        
            Category::create( [
            'id'=>141,
            'title'=>'সাম্প্রতিক ইতিহাস',
            'slug'=>'recent-history',
            'short_desc'=>NULL,
            'parent_id'=>22,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:39:25',
            'updated_at'=>'2021-12-27 12:39:25'
            ] );
                        
            Category::create( [
            'id'=>142,
            'title'=>'খেলার নিয়ম কানুন',
            'slug'=>'rules-of-the-game',
            'short_desc'=>NULL,
            'parent_id'=>23,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:40:42',
            'updated_at'=>'2021-12-27 12:40:42'
            ] );
                        
            Category::create( [
            'id'=>143,
            'title'=>'ছড়া',
            'slug'=>'rhyme',
            'short_desc'=>NULL,
            'parent_id'=>24,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:41:11',
            'updated_at'=>'2021-12-27 12:41:11'
            ] );
                        
            Category::create( [
            'id'=>144,
            'title'=>'কবিতা',
            'slug'=>'poetry',
            'short_desc'=>NULL,
            'parent_id'=>24,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:41:34',
            'updated_at'=>'2021-12-27 12:41:34'
            ] );
                        
            Category::create( [
            'id'=>145,
            'title'=>'আবৃত্তি ও কলাকৌশল',
            'slug'=>'recitation-and-technique',
            'short_desc'=>NULL,
            'parent_id'=>24,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:42:05',
            'updated_at'=>'2021-12-27 12:42:05'
            ] );
                        
            Category::create( [
            'id'=>146,
            'title'=>'কবিতা সংকলন ও সমগ্র',
            'slug'=>'collection-of-poems-and-the-whole',
            'short_desc'=>NULL,
            'parent_id'=>24,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:42:52',
            'updated_at'=>'2021-12-27 12:42:52'
            ] );
                        
            Category::create( [
            'id'=>147,
            'title'=>'প্রাচীন সভ্যতা',
            'slug'=>'ancient-civilization',
            'short_desc'=>NULL,
            'parent_id'=>25,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:43:25',
            'updated_at'=>'2021-12-27 12:43:25'
            ] );
                        
            Category::create( [
            'id'=>148,
            'title'=>'জীবন, জীবিকা ও সংস্কৃতি',
            'slug'=>'life-livelihood-and-culture',
            'short_desc'=>NULL,
            'parent_id'=>25,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:43:59',
            'updated_at'=>'2021-12-27 12:43:59'
            ] );
                        
            Category::create( [
            'id'=>149,
            'title'=>'রেনেসাঁ',
            'slug'=>'renaissance',
            'short_desc'=>NULL,
            'parent_id'=>25,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:44:24',
            'updated_at'=>'2021-12-27 12:44:24'
            ] );
                        
            Category::create( [
            'id'=>150,
            'title'=>'প্রত্নতত্ত্ব ও প্রত্নতাত্তিক ইতিহাস',
            'slug'=>'archeology-and-archeological-history',
            'short_desc'=>NULL,
            'parent_id'=>25,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:44:51',
            'updated_at'=>'2021-12-27 12:44:51'
            ] );
                        
            Category::create( [
            'id'=>151,
            'title'=>'সভ্যতার বিকাশ ও বিবর্তন',
            'slug'=>'the-development-and-evolution-of-civilization',
            'short_desc'=>NULL,
            'parent_id'=>25,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:45:34',
            'updated_at'=>'2021-12-27 12:45:34'
            ] );
                        
            Category::create( [
            'id'=>152,
            'title'=>'মুসলিম সভ্যতা ও সংস্কৃতি',
            'slug'=>'muslim-civilization-and-culture',
            'short_desc'=>NULL,
            'parent_id'=>25,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:46:06',
            'updated_at'=>'2021-12-27 12:46:06'
            ] );
                        
            Category::create( [
            'id'=>153,
            'title'=>'সমাজ ও সভ্যতা',
            'slug'=>'society-and-civilization',
            'short_desc'=>NULL,
            'parent_id'=>25,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:46:33',
            'updated_at'=>'2021-12-27 12:46:33'
            ] );
                        
            Category::create( [
            'id'=>154,
            'title'=>'লোকশিল্প ও সংস্কৃতি',
            'slug'=>'folk-art-and-culture',
            'short_desc'=>NULL,
            'parent_id'=>25,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:47:17',
            'updated_at'=>'2021-12-27 12:47:17'
            ] );
                        
            Category::create( [
            'id'=>155,
            'title'=>'Architecture',
            'slug'=>'architecture',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:47:46',
            'updated_at'=>'2021-12-27 12:47:46'
            ] );
                        
            Category::create( [
            'id'=>156,
            'title'=>'Computer Science & Engineering',
            'slug'=>'computer-science-engineering',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:48:18',
            'updated_at'=>'2021-12-27 12:48:18'
            ] );
                        
            Category::create( [
            'id'=>157,
            'title'=>'Electrical & Electronic Engineering',
            'slug'=>'electrical-electronic-engineering',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:49:58',
            'updated_at'=>'2021-12-27 12:49:58'
            ] );
                        
            Category::create( [
            'id'=>158,
            'title'=>'Civil Engineering',
            'slug'=>'civil-engineering',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:50:21',
            'updated_at'=>'2021-12-27 12:50:21'
            ] );
                        
            Category::create( [
            'id'=>159,
            'title'=>'Mechanical Engineering',
            'slug'=>'mechanical-engineering',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:50:49',
            'updated_at'=>'2021-12-27 12:50:49'
            ] );
                        
            Category::create( [
            'id'=>160,
            'title'=>'Naval Architecture & Marine Engineering',
            'slug'=>'naval-architecture-marine-engineering',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:51:32',
            'updated_at'=>'2021-12-27 12:51:32'
            ] );
                        
            Category::create( [
            'id'=>161,
            'title'=>'Industrial & Production Engineering',
            'slug'=>'industrial-production-engineering',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:52:05',
            'updated_at'=>'2021-12-27 12:52:05'
            ] );
                        
            Category::create( [
            'id'=>162,
            'title'=>'Water Resources Engineering',
            'slug'=>'water-resources-engineering',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:52:31',
            'updated_at'=>'2021-12-27 12:52:31'
            ] );
                        
            Category::create( [
            'id'=>163,
            'title'=>'Chemical Engineering',
            'slug'=>'chemical-engineering',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:52:51',
            'updated_at'=>'2021-12-27 12:52:51'
            ] );
                        
            Category::create( [
            'id'=>164,
            'title'=>'Materials & Metallurgical Engineering',
            'slug'=>'materials-metallurgical-engineering',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:53:16',
            'updated_at'=>'2021-12-27 12:53:16'
            ] );
                        
            Category::create( [
            'id'=>165,
            'title'=>'Petroleum & Mineral Resources Engineering',
            'slug'=>'petroleum-mineral-resources-engineering',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:54:04',
            'updated_at'=>'2021-12-27 12:54:04'
            ] );
                        
            Category::create( [
            'id'=>166,
            'title'=>'Aeronautical Engineering',
            'slug'=>'aeronautical-engineering',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:54:23',
            'updated_at'=>'2021-12-27 12:54:23'
            ] );
                        
            Category::create( [
            'id'=>167,
            'title'=>'Nuclear Energy Engineering',
            'slug'=>'nuclear-energy-engineering',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:54:44',
            'updated_at'=>'2021-12-27 12:54:44'
            ] );
                        
            Category::create( [
            'id'=>168,
            'title'=>'Environmental Engineering',
            'slug'=>'environmental-engineering',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:55:02',
            'updated_at'=>'2021-12-27 12:55:02'
            ] );
                        
            Category::create( [
            'id'=>169,
            'title'=>'Glass and Ceramics Engineering',
            'slug'=>'glass-and-ceramics-engineering',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:55:28',
            'updated_at'=>'2021-12-27 12:55:28'
            ] );
                        
            Category::create( [
            'id'=>170,
            'title'=>'Textile Engineering',
            'slug'=>'textile-engineering',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:55:58',
            'updated_at'=>'2021-12-27 12:55:58'
            ] );
                        
            Category::create( [
            'id'=>171,
            'title'=>'Telecommunication',
            'slug'=>'telecommunication',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:56:18',
            'updated_at'=>'2021-12-27 12:56:18'
            ] );
                        
            Category::create( [
            'id'=>172,
            'title'=>'Biomedical Engineering',
            'slug'=>'biomedical-engineering',
            'short_desc'=>NULL,
            'parent_id'=>26,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:56:52',
            'updated_at'=>'2021-12-27 12:56:52'
            ] );
                        
            Category::create( [
            'id'=>173,
            'title'=>'গণিত',
            'slug'=>'mathematics',
            'short_desc'=>NULL,
            'parent_id'=>27,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:57:15',
            'updated_at'=>'2021-12-27 12:57:15'
            ] );
                        
            Category::create( [
            'id'=>174,
            'title'=>'বিজ্ঞান ও প্রযুক্তি',
            'slug'=>'science-and-technology',
            'short_desc'=>NULL,
            'parent_id'=>27,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:57:53',
            'updated_at'=>'2021-12-27 12:57:53'
            ] );
                        
            Category::create( [
            'id'=>175,
            'title'=>'মহাকাশ বিজ্ঞান ও জ্যোতির্বিদ্যা',
            'slug'=>'space-science-and-astronomy',
            'short_desc'=>NULL,
            'parent_id'=>27,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:58:33',
            'updated_at'=>'2021-12-27 12:58:33'
            ] );
                        
            Category::create( [
            'id'=>176,
            'title'=>'বিজ্ঞান প্রজেক্ট',
            'slug'=>'science-project',
            'short_desc'=>NULL,
            'parent_id'=>27,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:58:57',
            'updated_at'=>'2021-12-27 12:58:57'
            ] );
                        
            Category::create( [
            'id'=>177,
            'title'=>'ইলেক্ট্রনিক্স',
            'slug'=>'electronics',
            'short_desc'=>NULL,
            'parent_id'=>27,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:59:17',
            'updated_at'=>'2021-12-27 12:59:17'
            ] );
                        
            Category::create( [
            'id'=>178,
            'title'=>'জীববিজ্ঞান',
            'slug'=>'biology',
            'short_desc'=>NULL,
            'parent_id'=>27,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:59:36',
            'updated_at'=>'2021-12-27 12:59:36'
            ] );
                        
            Category::create( [
            'id'=>179,
            'title'=>'পদার্থবিজ্ঞান',
            'slug'=>'physics',
            'short_desc'=>NULL,
            'parent_id'=>27,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 12:59:57',
            'updated_at'=>'2021-12-27 12:59:57'
            ] );
                        
            Category::create( [
            'id'=>180,
            'title'=>'রসায়ন',
            'slug'=>'chemistry',
            'short_desc'=>NULL,
            'parent_id'=>27,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 13:00:22',
            'updated_at'=>'2021-12-27 13:00:22'
            ] );
                        
            Category::create( [
            'id'=>181,
            'title'=>'ভূগোল ও পরিবেশ বিদ্যা',
            'slug'=>'geography-and-ecology',
            'short_desc'=>NULL,
            'parent_id'=>27,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 13:00:56',
            'updated_at'=>'2021-12-27 13:00:56'
            ] );
                        
            Category::create( [
            'id'=>182,
            'title'=>'বিজ্ঞানভিত্তিক প্রবন্ধ, গবেষণা, জার্নাল ও রেফারেন্স',
            'slug'=>'science-based-articles-research-journals-and-references',
            'short_desc'=>NULL,
            'parent_id'=>27,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 13:01:37',
            'updated_at'=>'2021-12-27 13:01:37'
            ] );
                        
            Category::create( [
            'id'=>183,
            'title'=>'ব্যাংকিং ও ফিনান্স',
            'slug'=>'banking-and-finance',
            'short_desc'=>NULL,
            'parent_id'=>28,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 13:02:10',
            'updated_at'=>'2021-12-27 13:02:10'
            ] );
                        
            Category::create( [
            'id'=>184,
            'title'=>'ব্র্যান্ডিং, মার্কেটিং ও সেলিং',
            'slug'=>'branding-marketing-and-selling',
            'short_desc'=>NULL,
            'parent_id'=>28,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 13:02:39',
            'updated_at'=>'2021-12-27 13:02:39'
            ] );
                        
            Category::create( [
            'id'=>185,
            'title'=>'ব্যবস্থাপনা ও নেতৃত্ব',
            'slug'=>'management-and-leadership',
            'short_desc'=>NULL,
            'parent_id'=>28,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 13:03:05',
            'updated_at'=>'2021-12-27 13:03:05'
            ] );
                        
            Category::create( [
            'id'=>186,
            'title'=>'ক্ষুদ্র ও মাঝারি ব্যবসায় উদ্যোগ',
            'slug'=>'small-and-medium-business-enterprises',
            'short_desc'=>NULL,
            'parent_id'=>28,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 13:03:44',
            'updated_at'=>'2021-12-27 13:03:44'
            ] );
                        
            Category::create( [
            'id'=>187,
            'title'=>'হিসাববিজ্ঞান',
            'slug'=>'accounting',
            'short_desc'=>NULL,
            'parent_id'=>28,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 13:04:02',
            'updated_at'=>'2021-12-27 13:04:02'
            ] );
                        
            Category::create( [
            'id'=>188,
            'title'=>'উদ্যোক্তা ও ব্যবসায়িক ব্যক্তিত্ব',
            'slug'=>'entrepreneur-and-business-personality',
            'short_desc'=>NULL,
            'parent_id'=>28,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 13:04:35',
            'updated_at'=>'2021-12-27 13:04:35'
            ] );
                        
            Category::create( [
            'id'=>189,
            'title'=>'ব্যবসায়িক আইন ও বিধিমালা',
            'slug'=>'business-laws-and-regulations',
            'short_desc'=>NULL,
            'parent_id'=>28,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 13:05:06',
            'updated_at'=>'2021-12-27 13:05:06'
            ] );
                        
            Category::create( [
            'id'=>190,
            'title'=>'ব্যাংকিং ডিপ্লোমা',
            'slug'=>'banking-diploma',
            'short_desc'=>NULL,
            'parent_id'=>28,
            'img'=>NULL,
            'status'=>1,
            'created_at'=>'2021-12-27 13:05:31',
            'updated_at'=>'2021-12-27 13:05:31'
            ] );
    }
}
