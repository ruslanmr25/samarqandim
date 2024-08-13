<?php

namespace Database\Seeders;

use App\Models\Menu;

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $primaryMenu = [
            [
                "name_uz" => "Yangiliklar",
                "name_en" => "News",
                "name_ru" => "Новости",
                "name_kr" => "Янгиликлар",

                "level" => 1,
                "path" => "news",
                'priority' => 5,
            ],
            [
                "name_uz" => "Tuzilma",

                "name_en" => "Structure",
                "name_ru" => "Состав",
                "name_kr" => "Тузилма",
                "level" => 1,
                "path" => "structure",
                'priority' => 1,

            ],
            [
                "name_uz" => "Ilmiy faoliyat",
                "name_en" => "Scientific activity",
                "name_ru" => "Научная деятельность",
                "name_kr" => "Илмий фаолият",
                "level" => 1,
                "path" => "scientific-activity",
                'priority' => 2,
            ],
            [
                "name_uz" => "Xalqaro aloqalar",
                "name_en" => "International relations",
                "name_ru" => "Международные отношения",
                "name_kr" => "Халқаро алоқалар",
                "level" => 1,
                "path" => "international-relations",
                'priority' => 3,
            ],
            [
                "name_uz" => "Madaniy-ma’rifiy faoliyat",
                "name_en" => "Cultural and educational activity",
                "name_ru" => "Культурно-просветительская деятельность",
                "name_kr" => "Маданий-маърифий фаолият",
                "level" => 1,
                "path" => "cultural-and-educational-activity",
                'priority' => 5,
            ],
            [
                "name_uz" => "Moliyaviy faoliyat",
                "name_en" => "Financial activity",
                "name_ru" => "Финансовая деятельность",
                "name_kr" => "Молиявий фаолият",
                "level" => 1,
                "path" => "financial-activity",
                'priority' => 4,
            ],
            [
                "name_uz" => "Root",
                "name_en" => "Root",
                "name_ru" => "Root",
                "name_kr" => "Root",
                "level" => 1,
                "path" => "visible-link",
                'priority' => 6,
            ],
        ];


        $menus = array(
            array('id' => '1', 'name_uz' => 'Yangiliklar', 'name_en' => 'News', 'name_ru' => 'Новости', 'name_kr' => 'Янгиликлар', 'level' => '1', 'path' => 'news', 'parent_id' => NULL, 'external_link' => NULL, 'priority' => '1', 'created_at' => '2024-08-11 01:24:03', 'updated_at' => '2024-08-12 03:18:55'),
            array('id' => '2', 'name_uz' => 'Tuzilma', 'name_en' => 'Structure', 'name_ru' => 'Состав', 'name_kr' => 'Тузилма', 'level' => '1', 'path' => 'structure', 'parent_id' => NULL, 'external_link' => NULL, 'priority' => '2', 'created_at' => '2024-08-11 01:24:03', 'updated_at' => '2024-08-12 03:21:52'),
            array('id' => '3', 'name_uz' => 'Ilmiy faoliyat', 'name_en' => 'Scientific activity', 'name_ru' => 'Научная деятельность', 'name_kr' => 'Илмий фаолият', 'level' => '1', 'path' => 'scientific-activity', 'parent_id' => NULL, 'external_link' => NULL, 'priority' => '3', 'created_at' => '2024-08-11 01:24:03', 'updated_at' => '2024-08-12 03:21:57'),
            array('id' => '4', 'name_uz' => 'Xalqaro aloqalar', 'name_en' => 'International relations', 'name_ru' => 'Международные отношения', 'name_kr' => 'Халқаро алоқалар', 'level' => '1', 'path' => 'international-relations', 'parent_id' => NULL, 'external_link' => NULL, 'priority' => '4', 'created_at' => '2024-08-11 01:24:03', 'updated_at' => '2024-08-12 03:22:06'),
            array('id' => '5', 'name_uz' => 'Madaniy-ma’rifiy faoliyat', 'name_en' => 'Cultural and educational activity', 'name_ru' => 'Культурно-просветительская деятельность', 'name_kr' => 'Маданий-маърифий фаолият', 'level' => '1', 'path' => 'cultural-and-educational-activity', 'parent_id' => NULL, 'external_link' => NULL, 'priority' => '6', 'created_at' => '2024-08-11 01:24:03', 'updated_at' => '2024-08-12 03:22:20'),
            array('id' => '6', 'name_uz' => 'Moliyaviy faoliyat', 'name_en' => 'Financial activity', 'name_ru' => 'Финансовая деятельность', 'name_kr' => 'Молиявий фаолият', 'level' => '1', 'path' => 'financial-activity', 'parent_id' => NULL, 'external_link' => NULL, 'priority' => '5', 'created_at' => '2024-08-11 01:24:03', 'updated_at' => '2024-08-12 03:22:13'),
            array('id' => '7', 'name_uz' => 'Root', 'name_en' => 'Root', 'name_ru' => 'Root', 'name_kr' => 'Root', 'level' => '1', 'path' => 'visible-link', 'parent_id' => NULL, 'external_link' => NULL, 'priority' => '7', 'created_at' => '2024-08-11 01:24:03', 'updated_at' => '2024-08-12 03:22:24'),
            array('id' => '8', 'name_uz' => 'Rahbariyat', 'name_en' => 'Administration', 'name_ru' => 'Раҳбарият', 'name_kr' => 'Администрация', 'level' => '2', 'path' => 'administration', 'parent_id' => '2', 'external_link' => NULL, 'priority' => '1', 'created_at' => '2024-08-12 03:50:39', 'updated_at' => '2024-08-12 03:50:39'),
            array('id' => '9', 'name_uz' => 'Fakultetlar', 'name_en' => 'Faculties', 'name_ru' => 'Факультетлар', 'name_kr' => 'Факультеты', 'level' => '2', 'path' => 'faculties', 'parent_id' => '2', 'external_link' => NULL, 'priority' => '2', 'created_at' => '2024-08-12 03:51:03', 'updated_at' => '2024-08-12 03:51:03'),
            array('id' => '10', 'name_uz' => 'Boshqarma va bo\'limlar', 'name_en' => 'Sections', 'name_ru' => 'Бошқарма ва бўлимлар', 'name_kr' => 'Отделы', 'level' => '2', 'path' => 'sections', 'parent_id' => '2', 'external_link' => NULL, 'priority' => '3', 'created_at' => '2024-08-12 03:51:34', 'updated_at' => '2024-08-12 03:51:34'),
            array('id' => '11', 'name_uz' => 'Kengashlar', 'name_en' => 'Counc', 'name_ru' => 'Кенгашлар', 'name_kr' => 'Советы', 'level' => '2', 'path' => 'counc', 'parent_id' => '2', 'external_link' => NULL, 'priority' => '4', 'created_at' => '2024-08-12 03:52:19', 'updated_at' => '2024-08-12 03:52:19'),
            array('id' => '12', 'name_uz' => 'Markazlar', 'name_en' => 'Centers', 'name_ru' => 'Марказлар', 'name_kr' => 'Центры', 'level' => '2', 'path' => 'centers', 'parent_id' => '2', 'external_link' => NULL, 'priority' => '5', 'created_at' => '2024-08-12 03:52:42', 'updated_at' => '2024-08-12 03:52:42'),
            array('id' => '13', 'name_uz' => 'Ilmiy-tadqiqot institutlari', 'name_en' => 'Research institutes', 'name_ru' => 'Илмий-тадқиқот институтлари', 'name_kr' => 'Научно-исследовательские институты', 'level' => '2', 'path' => 'research_institutes', 'parent_id' => '2', 'external_link' => NULL, 'priority' => '6', 'created_at' => '2024-08-12 03:54:38', 'updated_at' => '2024-08-12 03:54:38'),
            array('id' => '14', 'name_uz' => 'Institutlar va filiallar', 'name_en' => 'Institutes and branches', 'name_ru' => 'Институтлар ва филиаллар', 'name_kr' => 'Институты и филиалы', 'level' => '2', 'path' => 'institutes_and_branches', 'parent_id' => '2', 'external_link' => NULL, 'priority' => '2', 'created_at' => '2024-08-12 03:55:34', 'updated_at' => '2024-08-12 04:14:51'),
            array('id' => '15', 'name_uz' => 'Universitet rektori', 'name_en' => 'Rector of the University', 'name_ru' => 'Университет ректори', 'name_kr' => 'Ректор университета', 'level' => '3', 'path' => 'rector_of_the_university', 'parent_id' => '8', 'external_link' => NULL, 'priority' => '1', 'created_at' => '2024-08-12 03:56:39', 'updated_at' => '2024-08-12 03:56:39'),
            array('id' => '16', 'name_uz' => 'O\'quv ishlari bo\'yicha birinchi prorektor', 'name_en' => 'First Vice Rector for Academic Affairs', 'name_ru' => 'Ўқув ишлари бўйича биринчи проректор', 'name_kr' => 'Первый проректор по учебной работе', 'level' => '3', 'path' => 'first_vice_rector_for_academic_affairs', 'parent_id' => '8', 'external_link' => NULL, 'priority' => '2', 'created_at' => '2024-08-12 04:01:32', 'updated_at' => '2024-08-12 04:01:32'),
            array('id' => '17', 'name_uz' => 'Yoshlar masalalari va ma’naviy-ma’rifiy ishlar bo‘yicha birinchi prorektor', 'name_en' => 'First vice-rector for youth affairs and spiritual and educational affairs', 'name_ru' => 'Ёшлар масалалари ва маънавий-маърифий ишлар бўйича биринчи проректор', 'name_kr' => 'Первый проректор по делам молодежи и духовно-просветительской работе', 'level' => '3', 'path' => 'first_vice-rector_for_youth_affairs_and_spiritual_and_educational_affairs', 'parent_id' => '8', 'external_link' => NULL, 'priority' => '3', 'created_at' => '2024-08-12 04:01:57', 'updated_at' => '2024-08-12 04:01:57'),
            array('id' => '18', 'name_uz' => 'Ilmiy ishlar va innovatsiyalar bo‘yicha prorektor', 'name_en' => 'Vice rector for scientific works and innovations', 'name_ru' => 'Илмий ишлар ва инновациялар бўйича проректор', 'name_kr' => 'Проректор по научным работам и инновациям', 'level' => '3', 'path' => 'vice_rector_for_scientific_works_and_innovations', 'parent_id' => '8', 'external_link' => NULL, 'priority' => '4', 'created_at' => '2024-08-12 04:02:37', 'updated_at' => '2024-08-12 04:02:37'),
            array('id' => '19', 'name_uz' => 'Moliya va iqtisod ishlari bo\'yicha prorektor', 'name_en' => 'The vice rector on financial-economics affairs', 'name_ru' => 'Молия ва иқтисод ишлари бўйича проректор', 'name_kr' => 'Проректор по финансово-экономической работе', 'level' => '3', 'path' => 'the_vice_rector_on_financial-economics_affairs', 'parent_id' => '8', 'external_link' => NULL, 'priority' => '5', 'created_at' => '2024-08-12 04:03:22', 'updated_at' => '2024-08-12 04:03:22'),
            array('id' => '20', 'name_uz' => 'Xalqaro hamkorlik bo\'yicha prorektor', 'name_en' => 'Vice Rector for international cooperation', 'name_ru' => 'Халқаро ҳамкорлик бўйича проректор', 'name_kr' => 'Проректор по международному сотрудничеству', 'level' => '3', 'path' => 'vice_rector_for_international_cooperation', 'parent_id' => '8', 'external_link' => NULL, 'priority' => '6', 'created_at' => '2024-08-12 04:03:53', 'updated_at' => '2024-08-12 04:03:53'),
            array('id' => '21', 'name_uz' => 'Qurilish-ta\'mirlash ishlari bo\'yicha prorektor', 'name_en' => 'Vice-rector for construction and renovation', 'name_ru' => 'Қурулиш-таъмирлаш ишлари бўйича проректор', 'name_kr' => 'Проректор по строительно-ремонтным работам', 'level' => '3', 'path' => 'vice-rector_for_construction_and_renovation', 'parent_id' => '8', 'external_link' => NULL, 'priority' => '7', 'created_at' => '2024-08-12 04:04:24', 'updated_at' => '2024-08-12 04:04:24'),
            array('id' => '22', 'name_uz' => 'Transformatsiya ofisi', 'name_en' => 'Office of Transformation', 'name_ru' => 'Трансформация офиси', 'name_kr' => 'Офис трансформации', 'level' => '3', 'path' => 'office_of_transformation', 'parent_id' => '8', 'external_link' => NULL, 'priority' => '9', 'created_at' => '2024-08-12 04:05:54', 'updated_at' => '2024-08-12 04:05:54'),
            array('id' => '24', 'name_uz' => 'Matematika fakulteti', 'name_en' => 'Mathematical faculty', 'name_ru' => 'Математика факультети', 'name_kr' => 'Математический факультет', 'level' => '3', 'path' => 'mathematical_faculty', 'parent_id' => '9', 'external_link' => NULL, 'priority' => '1', 'created_at' => '2024-08-12 04:08:18', 'updated_at' => '2024-08-12 04:08:18'),
            array('id' => '25', 'name_uz' => 'Geografiya va ekologiya fakulteti', 'name_en' => 'Faculty of Geography and Ecology', 'name_ru' => 'География ва экология факультети', 'name_kr' => 'Факультет географии и экологии', 'level' => '3', 'path' => 'faculty_of_geography_and_ecology', 'parent_id' => '9', 'external_link' => NULL, 'priority' => '2', 'created_at' => '2024-08-12 04:08:57', 'updated_at' => '2024-08-12 04:08:57'),
            array('id' => '26', 'name_uz' => 'Tarix fakulteti', 'name_en' => 'Faculty of History', 'name_ru' => 'Тарих факультети', 'name_kr' => 'Факультет истории', 'level' => '3', 'path' => 'faculty_of_history', 'parent_id' => '9', 'external_link' => NULL, 'priority' => '3', 'created_at' => '2024-08-12 04:09:20', 'updated_at' => '2024-08-12 04:09:20'),
            array('id' => '27', 'name_uz' => 'Psixologiya va ijtimoiy-siyosiy fanlar fakulteti', 'name_en' => 'Faculty of Psychology and Social-Political Sciences', 'name_ru' => 'Психология ва ижтимоий-сиёсий фанлар факультети', 'name_kr' => 'Факультет психологии и социально-политических наук', 'level' => '3', 'path' => 'faculty_of_psychology_and_social-political_sciences', 'parent_id' => '9', 'external_link' => NULL, 'priority' => '4', 'created_at' => '2024-08-12 04:10:07', 'updated_at' => '2024-08-12 04:10:07'),
            array('id' => '28', 'name_uz' => 'Intellektual tizimlar va kompyuter texnologiyalari fakulteti', 'name_en' => 'Faculty of Intelligent Systems and Computer Technologies', 'name_ru' => 'Интеллектуал тизимлар ва компьютер технологиялари факультети', 'name_kr' => 'Факультет интеллектуальных систем и компьютерных технологий', 'level' => '3', 'path' => 'faculty_of_intelligent_systems_and_computer_technologies', 'parent_id' => '9', 'external_link' => NULL, 'priority' => '5', 'created_at' => '2024-08-12 04:11:33', 'updated_at' => '2024-08-12 04:11:33'),
            array('id' => '29', 'name_uz' => 'Yuridik fakulteti', 'name_en' => 'Faculty of Law', 'name_ru' => 'Юридик факультети', 'name_kr' => 'Юридический факультет', 'level' => '3', 'path' => 'faculty_of_law', 'parent_id' => '9', 'external_link' => NULL, 'priority' => '6', 'created_at' => '2024-08-12 04:12:19', 'updated_at' => '2024-08-12 04:12:19'),
            array('id' => '30', 'name_uz' => 'Filologiya fakulteti', 'name_en' => 'Faculty of Philology', 'name_ru' => 'Филология факультети', 'name_kr' => 'Факультет филологии', 'level' => '3', 'path' => 'faculty_of_philology', 'parent_id' => '9', 'external_link' => NULL, 'priority' => '7', 'created_at' => '2024-08-12 04:12:51', 'updated_at' => '2024-08-12 04:12:51'),
            array('id' => '31', 'name_uz' => 'Pedagogika ta’limi fakulteti', 'name_en' => 'Faculty of Pedagogical Education', 'name_ru' => 'Педагогика таълими факультети', 'name_kr' => 'Факультет педагогического образования', 'level' => '3', 'path' => 'faculty_of_pedagogical_education', 'parent_id' => '9', 'external_link' => NULL, 'priority' => '8', 'created_at' => '2024-08-12 04:13:18', 'updated_at' => '2024-08-12 04:13:18'),
            array('id' => '32', 'name_uz' => 'Birinchi o\'quv-uslubiy boshqarma', 'name_en' => 'The first educational and methodological department', 'name_ru' => 'Биринчи ўқув услубий бошқарма', 'name_kr' => 'Первый учебно-методический отдел', 'level' => '3', 'path' => 'the_first_educational_and_methodological_department', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '1', 'created_at' => '2024-08-12 04:15:23', 'updated_at' => '2024-08-12 04:15:23'),
            array('id' => '33', 'name_uz' => 'Ta’lim sifatini nazorat qilish bo’limi', 'name_en' => 'Department of control on teaching quality', 'name_ru' => 'Таълим сифатини назорат қилиш бўлими', 'name_kr' => 'Отдел контроля качества обучения', 'level' => '3', 'path' => 'department_of_control_on_teaching_quality', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '2', 'created_at' => '2024-08-12 04:16:28', 'updated_at' => '2024-08-12 04:16:28'),
            array('id' => '34', 'name_uz' => 'Kadrlar bo\'limi', 'name_en' => 'Personnel department', 'name_ru' => 'Кадрлар бўлими', 'name_kr' => 'Отдел кадров', 'level' => '3', 'path' => 'personnel_department', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '3', 'created_at' => '2024-08-12 04:17:20', 'updated_at' => '2024-08-12 04:17:20'),
            array('id' => '35', 'name_uz' => 'Yoshlar bilan ishlash, ma’naviyat va ma’rifat boshqarmasi', 'name_en' => 'Department of work with youth, spirituality and enlightenment', 'name_ru' => 'Ёшлар билан ишлаш, маънавият ва маърифат бошқармаси', 'name_kr' => 'Отдел по работе с молодежью, духовности и просвещения', 'level' => '3', 'path' => 'department_of_work_with_youth,_spirituality_and_enlightenment', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '4', 'created_at' => '2024-08-12 04:18:22', 'updated_at' => '2024-08-12 04:18:22'),
            array('id' => '36', 'name_uz' => 'Ilmiy-tadqiqotlar va innovatsion rivojlantirish boshqarmasi', 'name_en' => 'Department of scientific researches and innovative development', 'name_ru' => 'Илмий-тадқиқотлар ва инновацион ривожлантириш бошқармаси', 'name_kr' => 'Отдел научных исследований и инновационного развития', 'level' => '3', 'path' => 'department_of_scientific_researches_and_innovative_development', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '5', 'created_at' => '2024-08-12 04:19:05', 'updated_at' => '2024-08-12 04:19:05'),
            array('id' => '37', 'name_uz' => 'Yuridik xizmat bo\'limi', 'name_en' => 'Legal Services Department', 'name_ru' => 'Юридик хизмат бўлими', 'name_kr' => 'Отдел юридических услуг', 'level' => '3', 'path' => 'legal_services_department', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '6', 'created_at' => '2024-08-12 04:19:31', 'updated_at' => '2024-08-12 04:19:31'),
            array('id' => '38', 'name_uz' => 'Nashr-matbaa markazi va tahrir nashriyot bo’limi', 'name_en' => 'Publishing and printing center and publishing department', 'name_ru' => 'Нашр-матбаа маркази ва таҳрир нашриёт бўлими', 'name_kr' => 'Издательско-полиграфический центр и издательский отдел', 'level' => '3', 'path' => 'publishing_and_printing_center_and_publishing_department', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '7', 'created_at' => '2024-08-12 04:20:26', 'updated_at' => '2024-08-12 04:20:26'),
            array('id' => '39', 'name_uz' => 'Reja-moliya bo’limi', 'name_en' => 'Department of Planning and Finance', 'name_ru' => 'Режа-молия бўлими', 'name_kr' => 'Планово-финансовый отдел', 'level' => '3', 'path' => 'department_of_planning_and_finance', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '8', 'created_at' => '2024-08-12 04:20:52', 'updated_at' => '2024-08-12 04:20:52'),
            array('id' => '40', 'name_uz' => 'Marketing va talabalar bilan ishlash bo\'limi', 'name_en' => 'Department of Marketing and Student Affairs', 'name_ru' => 'Маркетинг ва талабалар билан ишлаш бўлими', 'name_kr' => 'Департамент маркетинга и студенческих дел', 'level' => '3', 'path' => 'department_of_marketing_and_student_affairs', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '9', 'created_at' => '2024-08-12 04:21:18', 'updated_at' => '2024-08-12 04:21:18'),
            array('id' => '41', 'name_uz' => 'Axborot xizmati', 'name_en' => 'Information service', 'name_ru' => 'Aхборот хизмати', 'name_kr' => 'Информационная служба', 'level' => '3', 'path' => 'information_service', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '10', 'created_at' => '2024-08-12 04:22:13', 'updated_at' => '2024-08-12 04:22:13'),
            array('id' => '42', 'name_uz' => 'Devonxona va arxiv bo‘limi', 'name_en' => 'Chancellery and archive department', 'name_ru' => 'Девонхона ва архив бўлими', 'name_kr' => 'Отдел канцелярии и архив', 'level' => '3', 'path' => 'chancellery_and_archive_department', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '11', 'created_at' => '2024-08-12 04:22:44', 'updated_at' => '2024-08-12 04:22:44'),
            array('id' => '43', 'name_uz' => 'Korrupsiyaga qarshi kurashish bo\'limi', 'name_en' => 'Anti-Corruption Department', 'name_ru' => 'Коррупсияга қарши курашиш бўлими', 'name_kr' => 'Антикоррупционный отдел', 'level' => '3', 'path' => 'anti-corruption_department', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '12', 'created_at' => '2024-08-12 04:23:23', 'updated_at' => '2024-08-12 04:23:23'),
            array('id' => '44', 'name_uz' => 'SamDU boshlang\'ich Kasaba uyushmasi qo\'mitasi', 'name_en' => 'Primary Trade Union Committee SamSU', 'name_ru' => 'СамДУ бошланғич Касаба уюшмаси қўмитаси', 'name_kr' => 'Первичный профсоюзный комитет СамГУ', 'level' => '3', 'path' => 'primary_trade_union_committee_samsu', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '14', 'created_at' => '2024-08-12 04:24:01', 'updated_at' => '2024-08-12 04:24:44'),
            array('id' => '45', 'name_uz' => 'Xotin-qizlar va gender tenglik masalalari bo‘yicha maslaxatchi', 'name_en' => 'Consultant on women’s and gender equality issues', 'name_ru' => 'Хотин-қизлар ва гендер тенглик масалалари бўйича маслахатчи', 'name_kr' => 'Cоветник ректора по вопросам женщин и гендерного равенства', 'level' => '3', 'path' => 'consultant_on_womens_and_gender_equality_issues', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '13', 'created_at' => '2024-08-12 04:24:34', 'updated_at' => '2024-08-12 04:24:34'),
            array('id' => '46', 'name_uz' => 'Innovatsion ishlanmalarni tijoratlashtirish va patentlash bo‘limi', 'name_en' => 'Department of commercialization and patenting of innovative developments', 'name_ru' => 'Инновацион ишланмаларни тижоратлаштириш ва патентлаш бўлими', 'name_kr' => 'Отдел коммерциализации и патентования инновационных разработок', 'level' => '3', 'path' => 'department_of_commercialization_and_patenting_of_innovative_developments', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '15', 'created_at' => '2024-08-12 04:25:32', 'updated_at' => '2024-08-12 04:25:32'),
            array('id' => '47', 'name_uz' => 'Ikkinchi o\'quv-uslubiy boshqarma', 'name_en' => 'The second educational and methodological department', 'name_ru' => 'Иккинчи ўқув-услубий бошқарма', 'name_kr' => 'Второй учебно-методический отдел', 'level' => '3', 'path' => 'the_second_educational_and_methodological_department', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '16', 'created_at' => '2024-08-12 04:25:57', 'updated_at' => '2024-08-12 04:25:57'),
            array('id' => '48', 'name_uz' => 'Buxgalteriya', 'name_en' => 'Accounting', 'name_ru' => 'Бухгалтерия', 'name_kr' => 'Бухгалтерский учет', 'level' => '3', 'path' => 'accounting', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '17', 'created_at' => '2024-08-12 04:26:17', 'updated_at' => '2024-08-12 04:26:17'),
            array('id' => '49', 'name_uz' => 'Xalqaro hamkorlik boshqarmasi', 'name_en' => 'Department of international cooperation', 'name_ru' => 'Халқаро ҳамкорлик бошқармаси', 'name_kr' => 'Управления международных отношения', 'level' => '3', 'path' => 'department_of_international_cooperation', 'parent_id' => '10', 'external_link' => NULL, 'priority' => '18', 'created_at' => '2024-08-12 04:27:07', 'updated_at' => '2024-08-12 04:27:07'),
            array('id' => '50', 'name_uz' => 'Jamoatchilik boshqaruvi va nazorati kengashi', 'name_en' => 'Council for Public Administration and Supervision', 'name_ru' => 'Жамоатчилик бошқаруви ва назорати кенгаши', 'name_kr' => 'Совет по государственному управлению и надзору', 'level' => '3', 'path' => 'council_for_public_administration_and_supervision', 'parent_id' => '11', 'external_link' => NULL, 'priority' => '1', 'created_at' => '2024-08-12 04:28:03', 'updated_at' => '2024-08-12 04:28:03'),
            array('id' => '51', 'name_uz' => 'Pedagog kadrlarni qayta tayyorlash va ularning malakasini oshirish mintaqaviy markazi', 'name_en' => 'Regional center of retraining and higher education of teachers', 'name_ru' => 'Педагог кадрларни қайта тайёрлаш ва уларнинг малакасини ошириш минтақавий маркази', 'name_kr' => 'Регионального центpа” переподготовки и пoвышeния квалификации  педагогических кадров', 'level' => '3', 'path' => 'regional_center_of_retraining_and_higher_education_of_teachers', 'parent_id' => '12', 'external_link' => NULL, 'priority' => '1', 'created_at' => '2024-08-12 04:28:42', 'updated_at' => '2024-08-12 04:28:42'),
            array('id' => '52', 'name_uz' => 'Raqamli ta\'lim texnologiyalari markazi', 'name_en' => 'Center for Digital Learning Technologies', 'name_ru' => 'Рақамли таълим технологиялари маркази', 'name_kr' => 'Центр цифровых технологий обучения', 'level' => '3', 'path' => 'center_for_digital_learning_technologies', 'parent_id' => '12', 'external_link' => NULL, 'priority' => '2', 'created_at' => '2024-08-12 04:29:09', 'updated_at' => '2024-08-12 04:29:09'),
            array('id' => '53', 'name_uz' => 'Axborot-resurs markazi', 'name_en' => 'Information Resource Center', 'name_ru' => 'Aхборот-ресурс маркази', 'name_kr' => 'Информационно-ресурсный центр', 'level' => '3', 'path' => 'information_resource_center', 'parent_id' => '12', 'external_link' => NULL, 'priority' => '3', 'created_at' => '2024-08-12 04:29:43', 'updated_at' => '2024-08-12 04:29:43'),
            array('id' => '54', 'name_uz' => 'Tayyorlov markazi', 'name_en' => 'Preparatory center', 'name_ru' => 'Тайёрлов маркази', 'name_kr' => 'Подготовительный центр', 'level' => '3', 'path' => 'preparatory_center', 'parent_id' => '12', 'external_link' => NULL, 'priority' => '4', 'created_at' => '2024-08-12 04:30:15', 'updated_at' => '2024-08-12 04:30:15'),
            array('id' => '55', 'name_uz' => 'Sun\'iy intellektni tartibga solishni rivojlantirish bo\'yicha Markaziy Osiyo tadqiqot markazi', 'name_en' => 'Central Asian Center for Research on the Development of Artificial Intelligence Regulation', 'name_ru' => 'Сунъий интеллектни тартибга солишни ривожлантириш бўйича Марказий Осиё тадқиқот маркази', 'name_kr' => 'Центрально-Азиатский центр исследований по развитию регулирования искусственного интеллекта', 'level' => '3', 'path' => 'central_asian_center_for_research_on_the_development_of_artificial_intelligence_regulation', 'parent_id' => '12', 'external_link' => NULL, 'priority' => '5', 'created_at' => '2024-08-12 04:31:06', 'updated_at' => '2024-08-12 04:31:06'),
            array('id' => '56', 'name_uz' => 'O\'zbekiston-Hindiston sun\'iy intellekt va mashinali o\'qitish qo\'shma markazi', 'name_en' => 'Joint center for artificial intelligence and machine learning Uzbekistan-India', 'name_ru' => 'Ўзбекистон-Ҳиндистон сунъий интеллект ва машинали ўқитиш қўшма маркази', 'name_kr' => 'Совместный центр искуственного интеллекта и машинного обучения Узбекистан-Индия', 'level' => '3', 'path' => 'joint_center_for_artificial_intelligence_and_machine_learning_uzbekistan-india', 'parent_id' => '12', 'external_link' => NULL, 'priority' => '6', 'created_at' => '2024-08-12 04:31:44', 'updated_at' => '2024-08-12 04:31:44'),
            array('id' => '57', 'name_uz' => 'Xalqaro ta’lim dasturlari markazi', 'name_en' => 'Center of International Education Programs', 'name_ru' => 'Халқаро таълим дастурлари маркази', 'name_kr' => 'Центр международных образовательных программ', 'level' => '3', 'path' => 'center_of_international_education_programs', 'parent_id' => '12', 'external_link' => NULL, 'priority' => '7', 'created_at' => '2024-08-12 04:34:20', 'updated_at' => '2024-08-12 04:34:20'),
            array('id' => '58', 'name_uz' => 'Magistratura markazi', 'name_en' => 'Masters Center', 'name_ru' => 'Магистратура маркази', 'name_kr' => 'Магистерский центр', 'level' => '3', 'path' => 'masters_center', 'parent_id' => '12', 'external_link' => NULL, 'priority' => '8', 'created_at' => '2024-08-12 04:34:47', 'updated_at' => '2024-08-12 04:34:47'),
            array('id' => '59', 'name_uz' => 'Ta\'limni rivojlantirish markazi', 'name_en' => 'Learning Development Center', 'name_ru' => 'Таълимни ривожлантириш маркази', 'name_kr' => 'Центр развития обучения', 'level' => '3', 'path' => 'learning_development_center', 'parent_id' => '12', 'external_link' => NULL, 'priority' => '9', 'created_at' => '2024-08-12 04:35:32', 'updated_at' => '2024-08-12 04:35:32'),
            array('id' => '60', 'name_uz' => 'Samarqand davlat universiteti xalqaro qo‘llab-quvvatlash markazi', 'name_en' => 'International Support Center of Samarkand State University', 'name_ru' => 'Самарқанд давлат университети халқаро қўллаб-қувватлаш маркази', 'name_kr' => 'Центр международной поддержки Самаркандского государственного университета', 'level' => '3', 'path' => 'international_support_center_of_samarkand_state_university', 'parent_id' => '12', 'external_link' => NULL, 'priority' => '10', 'created_at' => '2024-08-12 04:35:52', 'updated_at' => '2024-08-12 04:35:52'),
            array('id' => '62', 'name_uz' => 'SamDU Muhandislik fizikasi instituti', 'name_en' => 'Engineering Physics Institute of SamSU', 'name_ru' => 'СамДУ Муҳандислик физикаси институти', 'name_kr' => 'Институт инженерной физики СамГУ', 'level' => '3', 'path' => 'engineering_physics_institute_of_samsu', 'parent_id' => '14', 'external_link' => NULL, 'priority' => '3', 'created_at' => '2024-08-12 04:37:39', 'updated_at' => '2024-08-12 04:38:43'),
            array('id' => '63', 'name_uz' => 'SamDU Kattaqo\'rg\'on filiali', 'name_en' => 'Kattakurgan branch of SamSU', 'name_ru' => 'СамДУ Каттақўрғон филиали', 'name_kr' => 'Каттакурганский филиал СамГУ', 'level' => '3', 'path' => 'kattakurgan_branch_of_samsu', 'parent_id' => '14', 'external_link' => 'https://samdukf.uz/', 'priority' => '1', 'created_at' => '2024-08-12 04:38:03', 'updated_at' => '2024-08-12 04:54:57'),
            array('id' => '64', 'name_uz' => 'SamDU Urgut filiali', 'name_en' => 'Urgut branch of SamSU', 'name_ru' => 'СамДУ Ургут филиали', 'name_kr' => 'Ургутский филиал СамГУ', 'level' => '3', 'path' => 'urgut_branch_of_samsu', 'parent_id' => '14', 'external_link' => 'https://www.samduuf.uz/uz', 'priority' => '2', 'created_at' => '2024-08-12 04:38:28', 'updated_at' => '2024-08-12 04:55:10'),
            array('id' => '65', 'name_uz' => 'SamDU Agrobiotexnologiyalar va oziq-ovqat xavfsizligi instituti', 'name_en' => 'Institute of Agrobiotechnologies and Food Safety of SamSU', 'name_ru' => 'СамДУ Агробиотехнологиялар ва озиқ-овқат хавфсизлиги институти', 'name_kr' => 'Институт агробиотехнологий и безопасности пищевых продуктов СамГУ', 'level' => '3', 'path' => 'institute_of_agrobiotechnologies_and_food_safety_of_samsu', 'parent_id' => '14', 'external_link' => NULL, 'priority' => '4', 'created_at' => '2024-08-12 04:39:16', 'updated_at' => '2024-08-12 04:39:16'),
            array('id' => '66', 'name_uz' => 'SamDU Turkologiya ilmiy-tadqiqot instituti', 'name_en' => 'Научно-исследовательский институт тюркологии СамГУ', 'name_ru' => 'СамДУ Туркология илмий-тадқиқот институти', 'name_kr' => 'Research Institute of Turkology of SamSU', 'level' => '3', 'path' => 'научно-исследовательский_институт_тюркологии_самгу', 'parent_id' => '14', 'external_link' => NULL, 'priority' => '5', 'created_at' => '2024-08-12 04:39:45', 'updated_at' => '2024-08-12 04:39:45'),
            array('id' => '67', 'name_uz' => 'SamDU Inson resurslari va mahalla taraqqiyotini boshqarish instituti', 'name_en' => 'Institute of Human Resources and Neighborhood Development Management of SamSU', 'name_ru' => 'СамДУ Инсон ресурслари ва маҳалла тараққиётини бошқариш институти', 'name_kr' => 'Институт управления человеческими ресурсами и районным развитием СамГУ', 'level' => '3', 'path' => 'institute_of_human_resources', 'parent_id' => '14', 'external_link' => NULL, 'priority' => '6', 'created_at' => '2024-08-12 04:40:26', 'updated_at' => '2024-08-12 04:40:26'),
            array('id' => '68', 'name_uz' => 'SamDU Biokimyo instituti', 'name_en' => 'Institute of Biochemistry of SamSU', 'name_ru' => 'СамДУ Биокимё институти', 'name_kr' => 'Институт Биохимии СамГУ', 'level' => '3', 'path' => 'institute_of_biochemistry_of_samsu', 'parent_id' => '14', 'external_link' => NULL, 'priority' => '7', 'created_at' => '2024-08-12 04:40:53', 'updated_at' => '2024-08-12 04:40:53'),
            array('id' => '69', 'name_uz' => 'Ilmiy-tadqiqot institutlari', 'name_en' => 'Research institutes', 'name_ru' => 'Илмий-тадқиқот институтлари', 'name_kr' => 'Научно-исследовательские институты', 'level' => '3', 'path' => 'research_institutes_1', 'parent_id' => '13', 'external_link' => NULL, 'priority' => '1', 'created_at' => '2024-08-12 04:41:47', 'updated_at' => '2024-08-12 04:41:47'),
            array('id' => '72', 'name_uz' => 'O\'quv ishlari bo\'yicha prorektor', 'name_en' => 'Vice Rector for Academic Affairs', 'name_ru' => 'Ўқув ишлари бўйича проректор', 'name_kr' => 'Проректор по учебной работе', 'level' => '3', 'path' => 'vice_rector_for_academic_affairs', 'parent_id' => '8', 'external_link' => NULL, 'priority' => '3', 'created_at' => '2024-08-13 15:22:22', 'updated_at' => '2024-08-13 15:22:22')
        );


        foreach ($menus as $menu) {
            Menu::create($menu);
        }


        // Menu::factory(20)->create();


        // $secondaryMenus = Menu::where("level", 2);
        // $thirdMenus = Menu::where('level', 3);


        // $secondaryMenus->update(['parent_id' => 2]);
        // $thirdMenus->update(['parent_id' => $secondaryMenus->first()->id]);
    }
}
