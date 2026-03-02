<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing rooms (use query builder for compatibility)
        Room::query()->delete();
        
        // Floor 1 Rooms - Coordinates matching SVG label positions exactly
        $floor1Rooms = [
            // TOP ROW CLASSROOMS (y ~ 180)
            ['name' => 'Room 102 Classroom', 'floor' => 1, 'type' => 'classroom', 'center_x' => 340, 'center_y' => 180, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Room 104 Classroom', 'floor' => 1, 'type' => 'classroom', 'center_x' => 455, 'center_y' => 180, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Room 106 Classroom', 'floor' => 1, 'type' => 'classroom', 'center_x' => 580, 'center_y' => 180, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Room 108 Classroom', 'floor' => 1, 'type' => 'classroom', 'center_x' => 710, 'center_y' => 180, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Room 110 Classroom', 'floor' => 1, 'type' => 'classroom', 'center_x' => 820, 'center_y' => 180, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => "Room 112 Registrar's Office", 'floor' => 1, 'type' => 'office', 'center_x' => 920, 'center_y' => 180, 'description' => "Registrar's Office", 'is_searchable' => true],
            
            // BOTTOM ROW LEFT SIDE (y ~ 400)
            ['name' => '1F Clinic', 'floor' => 1, 'type' => 'clinic', 'center_x' => 75, 'center_y' => 380, 'description' => 'First Floor Clinic', 'is_searchable' => true],
            ['name' => 'Room 101', 'floor' => 1, 'type' => 'classroom', 'center_x' => 210, 'center_y' => 400, 'description' => 'Room 101', 'is_searchable' => true],
            ['name' => 'Comfort Room', 'floor' => 1, 'type' => 'restroom', 'center_x' => 340, 'center_y' => 400, 'description' => 'Restroom', 'is_searchable' => true],
            
            // BOTTOM ROW CENTER
            ['name' => 'Room 103-B Classroom', 'floor' => 1, 'type' => 'classroom', 'center_x' => 510, 'center_y' => 350, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Room 103-A Classroom', 'floor' => 1, 'type' => 'classroom', 'center_x' => 455, 'center_y' => 420, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Room 105 Classroom', 'floor' => 1, 'type' => 'classroom', 'center_x' => 580, 'center_y' => 420, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'EE Shop', 'floor' => 1, 'type' => 'shop', 'center_x' => 720, 'center_y' => 400, 'description' => 'EE Shop', 'is_searchable' => true],
            ['name' => 'Room 111 Cashier', 'floor' => 1, 'type' => 'office', 'center_x' => 880, 'center_y' => 400, 'description' => 'Cashier', 'is_searchable' => true],
            
            // RIGHT SIDE
            ['name' => 'Career Center', 'floor' => 1, 'type' => 'office', 'center_x' => 1250, 'center_y' => 340, 'description' => 'Career Center', 'is_searchable' => true],
            ['name' => 'Elevator', 'floor' => 1, 'type' => 'elevator', 'center_x' => 1140, 'center_y' => 365, 'description' => 'Elevator', 'is_searchable' => true],
            
            // AMT AREA (yellow section, y ~ 680)
            ['name' => 'AMT Laboratory', 'floor' => 1, 'type' => 'lab', 'center_x' => 880, 'center_y' => 680, 'description' => 'AMT Laboratory', 'is_searchable' => true],
            ['name' => 'Comfort Room AMT', 'floor' => 1, 'type' => 'restroom', 'center_x' => 700, 'center_y' => 780, 'description' => 'CR', 'is_searchable' => true],
            
            // HANGAR AREA (right side with planes, x ~ 1150)
            ['name' => 'Hangar', 'floor' => 1, 'type' => 'hangar', 'center_x' => 1150, 'center_y' => 700, 'description' => 'Hangar', 'is_searchable' => true],
            ['name' => 'CR', 'floor' => 1, 'type' => 'restroom', 'center_x' => 1050, 'center_y' => 530, 'description' => 'CR', 'is_searchable' => true],
            
            // STAIRS
            ['name' => 'Stairs Main', 'floor' => 1, 'type' => 'stairs', 'center_x' => 280, 'center_y' => 100, 'description' => 'Stairs', 'is_searchable' => true],
            ['name' => 'Stairs East', 'floor' => 1, 'type' => 'stairs', 'center_x' => 1000, 'center_y' => 410, 'description' => 'Stairs', 'is_searchable' => true],
            
            // EXITS
            ['name' => 'Exit Main', 'floor' => 1, 'type' => 'exit', 'center_x' => 195, 'center_y' => 115, 'description' => 'Exit', 'is_searchable' => true],
            ['name' => 'Exit East', 'floor' => 1, 'type' => 'exit', 'center_x' => 1055, 'center_y' => 115, 'description' => 'Exit', 'is_searchable' => true],
            ['name' => 'Exit Career', 'floor' => 1, 'type' => 'exit', 'center_x' => 1280, 'center_y' => 255, 'description' => 'Exit', 'is_searchable' => true],
            ['name' => 'Exit Hangar', 'floor' => 1, 'type' => 'exit', 'center_x' => 1280, 'center_y' => 660, 'description' => 'Exit', 'is_searchable' => true],
        ];
        
        foreach ($floor1Rooms as $room) {
            Room::create($room);
        }
        
        // Floor 2 Rooms
        $floor2Rooms = [
            ['name' => 'Stock Room', 'floor' => 2, 'type' => 'storage', 'center_x' => 100, 'center_y' => 280, 'description' => 'Stock Room', 'is_searchable' => true],
            ['name' => 'Interviewing Room', 'floor' => 2, 'type' => 'office', 'center_x' => 100, 'center_y' => 320, 'description' => 'Interviewing Room', 'is_searchable' => true],
            ['name' => 'HR Office', 'floor' => 2, 'type' => 'office', 'center_x' => 180, 'center_y' => 320, 'description' => 'HR Office', 'is_searchable' => true],
            ['name' => 'HR Waiting Room', 'floor' => 2, 'type' => 'office', 'center_x' => 280, 'center_y' => 320, 'description' => 'HR Waiting Room', 'is_searchable' => true],
            ['name' => 'Toilet', 'floor' => 2, 'type' => 'restroom', 'center_x' => 360, 'center_y' => 320, 'description' => 'Toilet', 'is_searchable' => true],
            ['name' => 'Elevator', 'floor' => 2, 'type' => 'elevator', 'center_x' => 380, 'center_y' => 320, 'description' => 'Elevator', 'is_searchable' => true],
            ['name' => 'Pantry', 'floor' => 2, 'type' => 'facility', 'center_x' => 130, 'center_y' => 400, 'description' => 'Pantry', 'is_searchable' => true],
            ['name' => 'Marketing and Admissions', 'floor' => 2, 'type' => 'office', 'center_x' => 280, 'center_y' => 400, 'description' => 'Marketing and Admissions', 'is_searchable' => true],
            ['name' => 'Campus Canteen', 'floor' => 2, 'type' => 'canteen', 'center_x' => 430, 'center_y' => 200, 'description' => 'Campus Canteen', 'is_searchable' => true],
            ['name' => 'Room 211', 'floor' => 2, 'type' => 'classroom', 'center_x' => 640, 'center_y' => 320, 'description' => 'Room 211', 'is_searchable' => true],
            ['name' => 'Room 209', 'floor' => 2, 'type' => 'classroom', 'center_x' => 760, 'center_y' => 320, 'description' => 'Room 209', 'is_searchable' => true],
            ['name' => 'Room 207', 'floor' => 2, 'type' => 'classroom', 'center_x' => 880, 'center_y' => 320, 'description' => 'Room 207', 'is_searchable' => true],
            ['name' => 'Room 205', 'floor' => 2, 'type' => 'classroom', 'center_x' => 1000, 'center_y' => 320, 'description' => 'Room 205', 'is_searchable' => true],
            ['name' => 'Home Economics Room 203', 'floor' => 2, 'type' => 'classroom', 'center_x' => 1150, 'center_y' => 320, 'description' => 'Home Economics Room 203', 'is_searchable' => true],
            ["name" => "Men's CR", 'floor' => 2, 'type' => 'restroom', 'center_x' => 1320, 'center_y' => 320, 'description' => "Men's Comfort Room", 'is_searchable' => true],
            ["name" => "Women's CR", 'floor' => 2, 'type' => 'restroom', 'center_x' => 1400, 'center_y' => 320, 'description' => "Women's Comfort Room", 'is_searchable' => true],
            ['name' => 'Main Lobby (1st Floor)', 'floor' => 2, 'type' => 'lobby', 'center_x' => 280, 'center_y' => 520, 'description' => 'Main Lobby', 'is_searchable' => true],
            ['name' => 'Room 210', 'floor' => 2, 'type' => 'classroom', 'center_x' => 600, 'center_y' => 520, 'description' => 'Room 210', 'is_searchable' => true],
            ['name' => 'Room 208', 'floor' => 2, 'type' => 'classroom', 'center_x' => 740, 'center_y' => 520, 'description' => 'Room 208', 'is_searchable' => true],
            ['name' => 'Room 207 Computer Room', 'floor' => 2, 'type' => 'lab', 'center_x' => 900, 'center_y' => 520, 'description' => 'Computer Room', 'is_searchable' => true],
            ['name' => 'High School Library Room 202', 'floor' => 2, 'type' => 'library', 'center_x' => 1100, 'center_y' => 520, 'description' => 'High School Library', 'is_searchable' => true],
            ['name' => 'Exit', 'floor' => 2, 'type' => 'exit', 'center_x' => 460, 'center_y' => 280, 'description' => 'Exit', 'is_searchable' => true],
            ['name' => 'Exit East', 'floor' => 2, 'type' => 'exit', 'center_x' => 1440, 'center_y' => 520, 'description' => 'Exit', 'is_searchable' => true],
        ];
        foreach ($floor2Rooms as $room) { Room::create($room); }
        
        // Floor 3 Rooms
        $floor3Rooms = [
            ['name' => 'Faculty Room', 'floor' => 3, 'type' => 'office', 'center_x' => 380, 'center_y' => 150, 'description' => 'Faculty Room', 'is_searchable' => true],
            ['name' => 'CR', 'floor' => 3, 'type' => 'restroom', 'center_x' => 400, 'center_y' => 260, 'description' => 'Comfort Room', 'is_searchable' => true],
            ['name' => 'Room 321', 'floor' => 3, 'type' => 'classroom', 'center_x' => 100, 'center_y' => 310, 'description' => 'Room 321', 'is_searchable' => true],
            ['name' => 'Room 320', 'floor' => 3, 'type' => 'classroom', 'center_x' => 100, 'center_y' => 350, 'description' => 'Room 320', 'is_searchable' => true],
            ['name' => 'Elevator', 'floor' => 3, 'type' => 'elevator', 'center_x' => 320, 'center_y' => 350, 'description' => 'Elevator', 'is_searchable' => true],
            ['name' => 'Room 319', 'floor' => 3, 'type' => 'classroom', 'center_x' => 100, 'center_y' => 420, 'description' => 'Room 319', 'is_searchable' => true],
            ['name' => 'Room 322 Stock Room', 'floor' => 3, 'type' => 'storage', 'center_x' => 180, 'center_y' => 420, 'description' => 'Stock Room', 'is_searchable' => true],
            ['name' => 'Room 318 Conference Room', 'floor' => 3, 'type' => 'conference', 'center_x' => 100, 'center_y' => 490, 'description' => 'Conference Room', 'is_searchable' => true],
            ['name' => 'Room 317', 'floor' => 3, 'type' => 'classroom', 'center_x' => 100, 'center_y' => 560, 'description' => 'Room 317', 'is_searchable' => true],
            ['name' => 'Room 316', 'floor' => 3, 'type' => 'classroom', 'center_x' => 180, 'center_y' => 620, 'description' => 'Room 316', 'is_searchable' => true],
            ['name' => 'Room 315', 'floor' => 3, 'type' => 'classroom', 'center_x' => 260, 'center_y' => 620, 'description' => 'Room 315', 'is_searchable' => true],
            ['name' => 'Room 314', 'floor' => 3, 'type' => 'classroom', 'center_x' => 340, 'center_y' => 540, 'description' => 'Room 314', 'is_searchable' => true],
            ['name' => 'Room 313', 'floor' => 3, 'type' => 'classroom', 'center_x' => 500, 'center_y' => 540, 'description' => 'Room 313', 'is_searchable' => true],
            ['name' => 'Room 311-B Accreditation Room', 'floor' => 3, 'type' => 'office', 'center_x' => 580, 'center_y' => 360, 'description' => 'Accreditation Room', 'is_searchable' => true],
            ['name' => 'Room 309 Student Affairs and Services Office', 'floor' => 3, 'type' => 'office', 'center_x' => 700, 'center_y' => 380, 'description' => 'Student Affairs Office', 'is_searchable' => true],
            ['name' => 'Athletics Office', 'floor' => 3, 'type' => 'office', 'center_x' => 800, 'center_y' => 380, 'description' => 'Athletics Office', 'is_searchable' => true],
            ['name' => 'Room 307 College Classroom', 'floor' => 3, 'type' => 'classroom', 'center_x' => 880, 'center_y' => 380, 'description' => 'College Classroom', 'is_searchable' => true],
            ['name' => 'Room 305 Audio Visual Room', 'floor' => 3, 'type' => 'classroom', 'center_x' => 1020, 'center_y' => 380, 'description' => 'Audio Visual Room', 'is_searchable' => true],
            ['name' => 'Room 303 College Classroom', 'floor' => 3, 'type' => 'classroom', 'center_x' => 1200, 'center_y' => 380, 'description' => 'College Classroom', 'is_searchable' => true],
            ['name' => 'Comfort Room', 'floor' => 3, 'type' => 'restroom', 'center_x' => 1300, 'center_y' => 380, 'description' => 'Comfort Room', 'is_searchable' => true],
            ['name' => 'Electrical Room', 'floor' => 3, 'type' => 'utility', 'center_x' => 1400, 'center_y' => 420, 'description' => 'Electrical Room', 'is_searchable' => true],
            ['name' => 'Room 312 CESO/RDO', 'floor' => 3, 'type' => 'office', 'center_x' => 640, 'center_y' => 560, 'description' => 'CESO/RDO', 'is_searchable' => true],
            ['name' => 'Room 310 College Classroom', 'floor' => 3, 'type' => 'classroom', 'center_x' => 760, 'center_y' => 560, 'description' => 'College Classroom', 'is_searchable' => true],
            ['name' => 'Room 308 College Classroom', 'floor' => 3, 'type' => 'classroom', 'center_x' => 880, 'center_y' => 560, 'description' => 'College Classroom', 'is_searchable' => true],
            ['name' => 'Room 306 College Classroom', 'floor' => 3, 'type' => 'classroom', 'center_x' => 1000, 'center_y' => 560, 'description' => 'College Classroom', 'is_searchable' => true],
            ['name' => 'Room 302-304 Guidance, Counseling & Testing', 'floor' => 3, 'type' => 'office', 'center_x' => 1180, 'center_y' => 560, 'description' => 'Guidance, Counseling & Testing', 'is_searchable' => true],
            ['name' => 'Exit', 'floor' => 3, 'type' => 'exit', 'center_x' => 470, 'center_y' => 330, 'description' => 'Exit', 'is_searchable' => true],
            ['name' => 'Exit East', 'floor' => 3, 'type' => 'exit', 'center_x' => 1420, 'center_y' => 560, 'description' => 'Exit', 'is_searchable' => true],
        ];
        foreach ($floor3Rooms as $room) { Room::create($room); }
        
        // Floor 4 Rooms
        $floor4Rooms = [
            ["name" => "Dean's Office", 'floor' => 4, 'type' => 'office', 'center_x' => 380, 'center_y' => 100, 'description' => "Dean's Office", 'is_searchable' => true],
            ["name" => "Academic Head's Office", 'floor' => 4, 'type' => 'office', 'center_x' => 380, 'center_y' => 170, 'description' => "Academic Head's Office", 'is_searchable' => true],
            ['name' => 'AMT Department Office', 'floor' => 4, 'type' => 'office', 'center_x' => 380, 'center_y' => 250, 'description' => 'AMT Department Office', 'is_searchable' => true],
            ['name' => 'Elevator', 'floor' => 4, 'type' => 'elevator', 'center_x' => 340, 'center_y' => 340, 'description' => 'Elevator', 'is_searchable' => true],
            ['name' => 'Lift', 'floor' => 4, 'type' => 'elevator', 'center_x' => 360, 'center_y' => 360, 'description' => 'Lift', 'is_searchable' => true],
            ['name' => 'WCC Library', 'floor' => 4, 'type' => 'library', 'center_x' => 200, 'center_y' => 450, 'description' => 'WCC Library', 'is_searchable' => true],
            ['name' => 'Classroom 401', 'floor' => 4, 'type' => 'classroom', 'center_x' => 600, 'center_y' => 360, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Classroom 402', 'floor' => 4, 'type' => 'classroom', 'center_x' => 720, 'center_y' => 360, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Classroom 403', 'floor' => 4, 'type' => 'classroom', 'center_x' => 840, 'center_y' => 360, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Classroom 404', 'floor' => 4, 'type' => 'classroom', 'center_x' => 960, 'center_y' => 360, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Classroom 405', 'floor' => 4, 'type' => 'classroom', 'center_x' => 1080, 'center_y' => 360, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Classroom 406', 'floor' => 4, 'type' => 'classroom', 'center_x' => 1200, 'center_y' => 360, 'description' => 'Classroom', 'is_searchable' => true],
            ["name" => "Men's CR", 'floor' => 4, 'type' => 'restroom', 'center_x' => 1300, 'center_y' => 360, 'description' => "Men's Comfort Room", 'is_searchable' => true],
            ["name" => "Women's CR", 'floor' => 4, 'type' => 'restroom', 'center_x' => 1380, 'center_y' => 360, 'description' => "Women's Comfort Room", 'is_searchable' => true],
            ['name' => 'Classroom 407', 'floor' => 4, 'type' => 'classroom', 'center_x' => 600, 'center_y' => 520, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Classroom 408', 'floor' => 4, 'type' => 'classroom', 'center_x' => 720, 'center_y' => 520, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Classroom 409', 'floor' => 4, 'type' => 'classroom', 'center_x' => 840, 'center_y' => 520, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Classroom 410', 'floor' => 4, 'type' => 'classroom', 'center_x' => 960, 'center_y' => 520, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Classroom 411', 'floor' => 4, 'type' => 'classroom', 'center_x' => 1080, 'center_y' => 520, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Classroom 412', 'floor' => 4, 'type' => 'classroom', 'center_x' => 1200, 'center_y' => 520, 'description' => 'Classroom', 'is_searchable' => true],
            ['name' => 'Exit', 'floor' => 4, 'type' => 'exit', 'center_x' => 480, 'center_y' => 340, 'description' => 'Exit', 'is_searchable' => true],
            ['name' => 'Exit East', 'floor' => 4, 'type' => 'exit', 'center_x' => 1420, 'center_y' => 520, 'description' => 'Exit', 'is_searchable' => true],
            ['name' => 'Stairs', 'floor' => 4, 'type' => 'stairs', 'center_x' => 500, 'center_y' => 360, 'description' => 'Stairs', 'is_searchable' => true],
            ['name' => 'Stairs East', 'floor' => 4, 'type' => 'stairs', 'center_x' => 1430, 'center_y' => 560, 'description' => 'Stairs', 'is_searchable' => true],
        ];
        foreach ($floor4Rooms as $room) { Room::create($room); }
        
        // Floor 5 Rooms
        $floor5Rooms = [
            ['name' => 'Elevator', 'floor' => 5, 'type' => 'elevator', 'center_x' => 320, 'center_y' => 200, 'description' => 'Elevator', 'is_searchable' => true],
            ['name' => 'Mock Hotel', 'floor' => 5, 'type' => 'facility', 'center_x' => 340, 'center_y' => 320, 'description' => 'Mock Hotel', 'is_searchable' => true],
            ['name' => 'Library', 'floor' => 5, 'type' => 'library', 'center_x' => 180, 'center_y' => 380, 'description' => 'Library', 'is_searchable' => true],
            ['name' => 'Room 514 IT Laboratory', 'floor' => 5, 'type' => 'lab', 'center_x' => 380, 'center_y' => 480, 'description' => 'IT Laboratory', 'is_searchable' => true],
            ['name' => 'Room 513 Aviation Classroom', 'floor' => 5, 'type' => 'classroom', 'center_x' => 600, 'center_y' => 280, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 511 Aviation Classroom', 'floor' => 5, 'type' => 'classroom', 'center_x' => 720, 'center_y' => 280, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 509 Aviation Classroom', 'floor' => 5, 'type' => 'classroom', 'center_x' => 840, 'center_y' => 280, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 507 Aviation Classroom', 'floor' => 5, 'type' => 'classroom', 'center_x' => 960, 'center_y' => 280, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 505 Aviation Classroom', 'floor' => 5, 'type' => 'classroom', 'center_x' => 1080, 'center_y' => 280, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 503 AMT Faculty', 'floor' => 5, 'type' => 'office', 'center_x' => 1200, 'center_y' => 280, 'description' => 'AMT Faculty', 'is_searchable' => true],
            ['name' => 'Room 501', 'floor' => 5, 'type' => 'classroom', 'center_x' => 1360, 'center_y' => 240, 'description' => 'Room 501', 'is_searchable' => true],
            ['name' => 'Comfort Room', 'floor' => 5, 'type' => 'restroom', 'center_x' => 1340, 'center_y' => 320, 'description' => 'Comfort Room', 'is_searchable' => true],
            ['name' => 'Room 512 Aviation Classroom', 'floor' => 5, 'type' => 'classroom', 'center_x' => 600, 'center_y' => 480, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 510 Aviation Classroom', 'floor' => 5, 'type' => 'classroom', 'center_x' => 720, 'center_y' => 480, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 508 Aviation Classroom', 'floor' => 5, 'type' => 'classroom', 'center_x' => 840, 'center_y' => 480, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 506 Aviation Classroom', 'floor' => 5, 'type' => 'classroom', 'center_x' => 960, 'center_y' => 480, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 504-502 AMT Drawing Room', 'floor' => 5, 'type' => 'classroom', 'center_x' => 1140, 'center_y' => 480, 'description' => 'AMT Drawing Room', 'is_searchable' => true],
            ['name' => 'Exit', 'floor' => 5, 'type' => 'exit', 'center_x' => 480, 'center_y' => 240, 'description' => 'Exit', 'is_searchable' => true],
            ['name' => 'Exit East', 'floor' => 5, 'type' => 'exit', 'center_x' => 1420, 'center_y' => 460, 'description' => 'Exit', 'is_searchable' => true],
            ['name' => 'Stairs', 'floor' => 5, 'type' => 'stairs', 'center_x' => 500, 'center_y' => 260, 'description' => 'Stairs', 'is_searchable' => true],
            ['name' => 'Stairs East', 'floor' => 5, 'type' => 'stairs', 'center_x' => 1430, 'center_y' => 520, 'description' => 'Stairs', 'is_searchable' => true],
        ];
        foreach ($floor5Rooms as $room) { Room::create($room); }
        
        // Floor 6 Rooms
        $floor6Rooms = [
            ['name' => 'Exit', 'floor' => 6, 'type' => 'exit', 'center_x' => 100, 'center_y' => 300, 'description' => 'Exit', 'is_searchable' => true],
            ['name' => 'Stairs', 'floor' => 6, 'type' => 'stairs', 'center_x' => 100, 'center_y' => 240, 'description' => 'Stairs', 'is_searchable' => true],
            ['name' => 'Room 602 Aviation Classroom', 'floor' => 6, 'type' => 'classroom', 'center_x' => 380, 'center_y' => 220, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 604 Aviation Classroom', 'floor' => 6, 'type' => 'classroom', 'center_x' => 500, 'center_y' => 220, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 606 Aviation Classroom', 'floor' => 6, 'type' => 'classroom', 'center_x' => 620, 'center_y' => 220, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 608 Aviation Classroom', 'floor' => 6, 'type' => 'classroom', 'center_x' => 740, 'center_y' => 220, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 610 Aviation Classroom', 'floor' => 6, 'type' => 'classroom', 'center_x' => 860, 'center_y' => 220, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 612 Aviation Classroom', 'floor' => 6, 'type' => 'classroom', 'center_x' => 980, 'center_y' => 220, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 614 Cisco Laboratory', 'floor' => 6, 'type' => 'lab', 'center_x' => 1180, 'center_y' => 180, 'description' => 'Cisco Laboratory', 'is_searchable' => true],
            ['name' => 'Room 615 Communication Arts Center', 'floor' => 6, 'type' => 'classroom', 'center_x' => 1340, 'center_y' => 260, 'description' => 'Communication Arts Center', 'is_searchable' => true],
            ['name' => 'Room 601 Psychology Laboratory', 'floor' => 6, 'type' => 'lab', 'center_x' => 200, 'center_y' => 420, 'description' => 'Psychology Laboratory', 'is_searchable' => true],
            ['name' => 'Room 603 Aviation Classroom', 'floor' => 6, 'type' => 'classroom', 'center_x' => 380, 'center_y' => 420, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 605 Aviation Classroom', 'floor' => 6, 'type' => 'classroom', 'center_x' => 500, 'center_y' => 420, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 607 Aviation Classroom', 'floor' => 6, 'type' => 'classroom', 'center_x' => 620, 'center_y' => 420, 'description' => 'Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 609 Non-Aviation Classroom', 'floor' => 6, 'type' => 'classroom', 'center_x' => 740, 'center_y' => 420, 'description' => 'Non-Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 611 Non-Aviation Classroom', 'floor' => 6, 'type' => 'classroom', 'center_x' => 860, 'center_y' => 420, 'description' => 'Non-Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Room 613 Non-Aviation Classroom', 'floor' => 6, 'type' => 'classroom', 'center_x' => 980, 'center_y' => 420, 'description' => 'Non-Aviation Classroom', 'is_searchable' => true],
            ['name' => 'Exit East', 'floor' => 6, 'type' => 'exit', 'center_x' => 1180, 'center_y' => 480, 'description' => 'Exit', 'is_searchable' => true],
            ['name' => 'Elevator', 'floor' => 6, 'type' => 'elevator', 'center_x' => 1280, 'center_y' => 440, 'description' => 'Elevator', 'is_searchable' => true],
            ['name' => 'Stairs East', 'floor' => 6, 'type' => 'stairs', 'center_x' => 1100, 'center_y' => 500, 'description' => 'Stairs', 'is_searchable' => true],
        ];
        foreach ($floor6Rooms as $room) { Room::create($room); }
        
        // Floor 7 Rooms
        $floor7Rooms = [
            ['name' => 'Exit', 'floor' => 7, 'type' => 'exit', 'center_x' => 100, 'center_y' => 280, 'description' => 'Exit', 'is_searchable' => true],
            ['name' => 'Stairs', 'floor' => 7, 'type' => 'stairs', 'center_x' => 100, 'center_y' => 220, 'description' => 'Stairs', 'is_searchable' => true],
            ['name' => 'Comfort Room', 'floor' => 7, 'type' => 'restroom', 'center_x' => 220, 'center_y' => 440, 'description' => 'Comfort Room', 'is_searchable' => true],
            ['name' => 'Basketball Court', 'floor' => 7, 'type' => 'gym', 'center_x' => 700, 'center_y' => 320, 'description' => 'Basketball Court', 'is_searchable' => true],
            ['name' => 'AMT Lab', 'floor' => 7, 'type' => 'lab', 'center_x' => 1200, 'center_y' => 300, 'description' => 'AMT Lab', 'is_searchable' => true],
            ['name' => 'Tool Room', 'floor' => 7, 'type' => 'storage', 'center_x' => 1100, 'center_y' => 360, 'description' => 'Tool Room', 'is_searchable' => true],
            ['name' => 'Elevator', 'floor' => 7, 'type' => 'elevator', 'center_x' => 1180, 'center_y' => 420, 'description' => 'Elevator', 'is_searchable' => true],
            ['name' => 'Exit East', 'floor' => 7, 'type' => 'exit', 'center_x' => 1100, 'center_y' => 480, 'description' => 'Exit', 'is_searchable' => true],
            ['name' => 'Stairs East', 'floor' => 7, 'type' => 'stairs', 'center_x' => 320, 'center_y' => 280, 'description' => 'Stairs', 'is_searchable' => true],
        ];
        foreach ($floor7Rooms as $room) { Room::create($room); }
        
        // Floor 8 Rooms
        $floor8Rooms = [
            ['name' => 'Stock Room', 'floor' => 8, 'type' => 'storage', 'center_x' => 200, 'center_y' => 240, 'description' => 'Stock Room', 'is_searchable' => true],
            ['name' => 'Exit', 'floor' => 8, 'type' => 'exit', 'center_x' => 100, 'center_y' => 300, 'description' => 'Exit', 'is_searchable' => true],
            ['name' => 'Stairs', 'floor' => 8, 'type' => 'stairs', 'center_x' => 100, 'center_y' => 220, 'description' => 'Stairs', 'is_searchable' => true],
            ['name' => 'Painting Lab', 'floor' => 8, 'type' => 'lab', 'center_x' => 200, 'center_y' => 440, 'description' => 'Painting Lab', 'is_searchable' => true],
            ['name' => 'Stage', 'floor' => 8, 'type' => 'facility', 'center_x' => 400, 'center_y' => 340, 'description' => 'Stage', 'is_searchable' => true],
            ['name' => 'Basketball Court', 'floor' => 8, 'type' => 'gym', 'center_x' => 700, 'center_y' => 340, 'description' => 'Basketball Court', 'is_searchable' => true],
            ['name' => 'Avionics Lab', 'floor' => 8, 'type' => 'lab', 'center_x' => 1160, 'center_y' => 260, 'description' => 'Avionics Lab', 'is_searchable' => true],
            ['name' => 'Power Plant', 'floor' => 8, 'type' => 'lab', 'center_x' => 1320, 'center_y' => 260, 'description' => 'Power Plant', 'is_searchable' => true],
            ['name' => 'Tool Room', 'floor' => 8, 'type' => 'storage', 'center_x' => 1360, 'center_y' => 180, 'description' => 'Tool Room', 'is_searchable' => true],
            ['name' => 'Non Destructive Lab', 'floor' => 8, 'type' => 'lab', 'center_x' => 1240, 'center_y' => 380, 'description' => 'Non Destructive Lab', 'is_searchable' => true],
            ['name' => 'Exit East', 'floor' => 8, 'type' => 'exit', 'center_x' => 1140, 'center_y' => 480, 'description' => 'Exit', 'is_searchable' => true],
            ['name' => 'Elevator', 'floor' => 8, 'type' => 'elevator', 'center_x' => 1240, 'center_y' => 440, 'description' => 'Elevator', 'is_searchable' => true],
            ['name' => 'Tool Room East', 'floor' => 8, 'type' => 'storage', 'center_x' => 1400, 'center_y' => 440, 'description' => 'Tool Room', 'is_searchable' => true],
            ['name' => 'Stairs East', 'floor' => 8, 'type' => 'stairs', 'center_x' => 320, 'center_y' => 280, 'description' => 'Stairs', 'is_searchable' => true],
        ];
        foreach ($floor8Rooms as $room) { Room::create($room); }
    }
}
