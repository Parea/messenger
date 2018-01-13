<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    for($i = 0; $i < 10; $i++):
        $userID = rand(1, 10);
        $validated = rand(0, 2);
        $validatedBy = ($validated == 0)?0:1;
        
        $messages[] = [
            'user_id'=> $userID,
            'message' => str_random(10),
            'validated' => $validated,
            'validated_by' => $validatedBy,];
    endfor;

    foreach($messages AS $message):
        Message::create($message);
    endforeach;
    }
}
