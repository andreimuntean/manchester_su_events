<?php

use Illuminate\Database\Seeder;

class WelcomeWeekEventsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-15",
      "time_start"        =>  "11:00",
      "time_end"          =>  "17:00",
      "title"             =>  "Campus Tours",
      "location_address"  =>  "Students' Union",
      "location_name"     =>  "Students' Union foyer",
      "cover"             =>  "University.Tours.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-15",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: Kingsman: The Secret Service",
      "location_name"     =>  "Council Chambers, Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Kingsman.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-15",
      "time_start"        =>  "17:00",
      "time_end"          =>  "18:30",
      "title"             =>  "Conversation Corner: International Students",
      "location_name"     =>  "Academy 2, Students' Union",
      "location_address"  =>  "Manchester Academy",
      "cover"             =>  "CC16.Weblistings.Int.16x9.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-15",
      "time_start"        =>  "18:30",
      "time_end"          =>  "20:30",
      "title"             =>  "Activities at The Union",
      "location_name"     =>  "Academy 2, Students' Union",
      "location_address"  =>  "Manchester Academy",
      "cover"             =>  "Union.Activities.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-16",
      "time_start"        =>  "11:00",
      "time_end"          =>  "17:00",
      "title"             =>  "Campus Tours",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "University.Tours.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-16",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: Frozen",
      "location_name"     =>  "Council Chambers, Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Frozen.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-16",
      "time_start"        =>  "19:00",
      "time_end"          =>  "21:00",
      "title"             =>  "World Quiz",
      "location_name"     =>  "Club Academy, Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Lets.Get.Quiz.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-17",
      "time_start"        =>  "11:00",
      "time_end"          =>  "17:00",
      "title"             =>  "Campus Tours",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "University.Tours.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-17",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: Spectre",
      "location_name"     =>  "Council Chambers, Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Spectre.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-17",
      "time_start"        =>  "21:00",
      "time_end"          =>  "2:00",
      "title"             =>  "Mingle After Hours",
      "location_name"     =>  "Union Bar, Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Mingle.AfterHours.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-18",
      "time_start"        =>  "11:00",
      "time_end"          =>  "17:00",
      "title"             =>  "Campus Tours",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "University.Tours.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-18",
      "time_start"        =>  "14:00",
      "time_end"          =>  "18:00",
      "title"             =>  "Culture and Faith Fair",
      "location_name"     =>  "Academy 2, Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Culture.Faith.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-18",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: Back to the Future",
      "location_name"     =>  "Council Chambers, Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Back.to.The.Future.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-19",
      "time_start"        =>  "8:00",
      "time_end"          =>  "16:30",
      "title"             =>  "Home Away from Home",
      "location_name"     =>  "Room 8, Students’ Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Home.Away.From.Home.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-19",
      "time_start"        =>  "12:00",
      "time_end"          =>  "15:00",
      "title"             =>  "Campus Tours",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "University.Tours.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-19",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: Labyrinth",
      "location_name"     =>  "Council Chambers, Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Labyrinth.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-19",
      "time_start"        =>  "17:00",
      "time_end"          =>  "18:30",
      "title"             =>  "Conversation Corner: Black and Minority Ethnic Students",
      "location_name"     =>  "Room 8 ,Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "CC16.Weblistings.Black.16x9.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-19",
      "time_start"        =>  "18:00",
      "time_end"          =>  "20:00",
      "title"             =>  "Let's Get Quizzical",
      "location_name"     =>  "Union Bar, Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Lets.Get.Quiz.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-20",
      "time_start"        =>  "8:00",
      "time_end"          =>  "18:00",
      "title"             =>  "Home Away from Home",
      "location_name"     =>  "Room 8 ,Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Home.Away.From.Home.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-20",
      "time_start"        =>  "10:00",
      "time_end"          =>  "16:00",
      "title"             =>  "Welcome Fair",
      "location_name"     =>  "Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Welcome.Fair.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-20",
      "time_start"        =>  "12:00",
      "time_end"          =>  "15:00",
      "title"             =>  "Campus Tours",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "University.Tours.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-20",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: Hot Fuzz",
      "location_name"     =>  "Academy 3, Students' Union",
      "location_address"  =>  "Manchester Academy",
      "cover"             =>  "Hot.fuzz.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-20",
      "time_start"        =>  "17:00",
      "time_end"          =>  "18:30",
      "title"             =>  "Conversation Corner: LGBTQ",
      "location_name"     =>  "Council Chambers, Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "CC16.Weblistings.LGBT.16x9.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "8:00",
      "time_end"          =>  "12:30",
      "title"             =>  "Home Away from Home",
      "location_name"     =>  "Room 8 ,Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Home.Away.From.Home.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "14:30",
      "time_end"          =>  "18:00",
      "title"             =>  "Home Away from Home",
      "location_name"     =>  "Room 8 ,Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Home.Away.From.Home.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "10:00",
      "time_end"          =>  "16:00",
      "title"             =>  "Welcome Fair",
      "location_name"     =>  "Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Welcome.Fair.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "12:00",
      "time_end"          =>  "15:00",
      "title"             =>  "Campus Tours",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "University.Tours.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "13:00",
      "time_end"          =>  "14:30",
      "title"             =>  "Conversation Corner: Mature Students and Student Parents",
      "location_name"     =>  "Room 8, Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "CC16.Weblistings.Mature.16x9.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: Eddie the Eagle",
      "location_name"     =>  "Academy 3, Students' Union",
      "location_address"  =>  "Manchester Academy",
      "cover"             =>  "Eddie.Eagle.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: Star Wars Episode VII - The Force Awakens",
      "location_name"     =>  "Renold Building, C16",
      "location_address"  =>  "Renold Building",
      "cover"             =>  "Force.Awakens.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "17:00",
      "time_end"          =>  "18:30",
      "title"             =>  "Conversation Corner: Women Students",
      "location_name"     =>  "Council Chambers. Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "CC16.Weblistings.Women.16x9.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "8:00",
      "time_end"          =>  "12:30",
      "title"             =>  "Home Away from Home",
      "location_name"     =>  "Room 8 ,Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Home.Away.From.Home.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "14:30",
      "time_end"          =>  "16:30",
      "title"             =>  "Home Away from Home",
      "location_name"     =>  "Room 8 ,Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Home.Away.From.Home.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "10:00",
      "time_end"          =>  "16:00",
      "title"             =>  "Sports and Physical Activities fair",
      "location_name"     =>  "Manchester Academy",
      "location_address"  =>  "Manchester Academy",
      "cover"             =>  "S&PA16.Weblisting.16x9.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "11:00",
      "time_end"          =>  "",
      "title"             =>  "Northern Quarter Café Crawl",
      "location_name"     =>  "Students' Union foyer",
      "cover"             =>  "Cafe.Crawl.1600x900.jpg",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "12:00",
      "time_end"          =>  "15:00",
      "title"             =>  "Campus Tours",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "University.Tours.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "12:30",
      "time_end"          =>  "14:30",
      "title"             =>  "Talking 'bout my education",
      "location_name"     =>  "Room 2, Students' Union",
      "cover"             =>  "talkin_bout_my_education.jpg",
      "location_address"  =>  "Students' Union",
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "13:00",
      "time_end"          =>  "14:30",
      "title"             =>  "Conversation Corner: Students with Disabilities",
      "location_name"     =>  "Room 8, Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "CC16.Weblistings.Dis.16x9.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "17:00",
      "time_end"          =>  "18:30",
      "title"             =>  "Conversation Corner: Postgraduate Students",
      "location_name"     =>  "Room 8, Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "CC16.Weblistings.Post.16x9.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at 5: The Imitation Game",
      "location_name"     =>  "Council Chambers, Students' Union (68)",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Imitation.Game.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-23",
      "time_start"        =>  "10:00",
      "time_end"          =>  "16:00",
      "title"             =>  "Outdoor Food Market",
      "location_name"     =>  "Marquee next to Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Outdoor.Food.Market.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-23",
      "time_start"        =>  "12:00",
      "time_end"          =>  "",
      "title"             =>  "Grub Club",
      "location_name"     =>  "Marquee next to Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Grub.Club.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-23",
      "time_start"        =>  "13:30",
      "time_end"          =>  "",
      "title"             =>  "Grub Club",
      "location_name"     =>  "Marquee next to Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Grub.Club.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-23",
      "time_start"        =>  "15:00",
      "time_end"          =>  "",
      "title"             =>  "Grub Club",
      "location_name"     =>  "Marquee next to Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Grub.Club.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-23",
      "time_start"        =>  "12:00",
      "time_end"          =>  "15:00",
      "title"             =>  "Campus Tours",
      "location_name"     =>  "Students' Union foyer",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "University.Tours.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-23",
      "time_start"        =>  "17:00",
      "time_end"          =>  "",
      "title"             =>  "Film at Five: The Lego Movie",
      "location_name"     =>  "Council Chambers, Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Lego.Movie.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-23",
      "time_start"        =>  "19:00",
      "time_end"          =>  "3:00",
      "title"             =>  "The Union Bar Weekend Warm Up",
      "location_name"     =>  "Union Bar, Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Union.Bar.1600x900.jpg"
    ]);

    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-24",
      "time_start"        =>  "20:00",
      "time_end"          =>  "5:00",
      "title"             =>  "Pangaea",
      "location_name"     =>  "Students' Union",
      "location_address"  =>  "Students' Union",
      "featured"          =>  1,
      "price"             =>  "Wristband",
      "cover"             =>  "PanSep16.WristbandAd.1600x900-01.jpg",
      "tickets_link"      =>  "https://www.ticketline.co.uk/order/tickets/13319083",
      "description"       =>  "Pangaea Festival returns this September! Join over 6,000 fellow students Down the Rabbit Hole, as we unlock a world of fantasy, puzzle and splendid mystery. Prepare yourself for the descent downwards into the parallel universe of Pangaea, dress for the occasion and you’ll never want to leave this wonderland. http://pangaeafestival.co.uk/"
    ]);

    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "20:00",
      "time_end"          =>  "5:00",
      "title"             =>  "Manchester Academy / Albert Hall",
      "location_name"     =>  "Manchester Academy / Albert Hall",
      "location_address"  =>  "Manchester Academy",
      "featured"          =>  1,
      "price"             =>  "Wristband",
      "cover"             =>  "Albert.hall.1600x900.jpg",
      "tickets_link"      =>  "https://www.ticketline.co.uk/order/tickets/13319083",
      "description"       =>  "Grey wristbands will be attending Manchester Academy: Carnival Magnifico presents Tough Love. Cream wristbands will be attending The Albert Hall: Bipolar Sunshine at The Albert Hall with Juicy / Gold Teeth / Murkage DJs"
    ]);

    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-20",
      "time_start"        =>  "20:00",
      "time_end"          =>  "5:00",
      "title"             =>  "Carnival Magnifico",
      "location_name"     =>  "Manchester Academy / Albert Hall",
      "location_address"  =>  "Manchester Academy",
      "featured"          =>  1,
      "price"             =>  "Wristband",
      "cover"             =>  "Carnival Magnifico16x9-01.jpg",
      "tickets_link"      =>  "https://www.ticketline.co.uk/order/tickets/13319083",
      "description"       =>  "Cream wristbands will be attending Manchester Academy: Carnival Magnifico presents Tough Love. Grey wristbands will be attending The Albert Hall: Bipolar Sunshine at The Albert Hall with Juicy / Gold Teeth / Murkage DJs"
    ]);

    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-18",
      "time_start"        =>  "20:00",
      "time_end"          =>  "5:00",
      "title"             =>  "Deansgate Locks",
      "location_name"     =>  "Deansgate Locks",
      "location_address"  =>  "Deansgate Locks",
      "featured"          =>  1,
      "price"             =>  "Wristband",
      "cover"             =>  "wristband3.jpg",
      "tickets_link"      =>  "https://www.ticketline.co.uk/order/tickets/13319083",
      "description"       =>  "Comedy Store, hosted by Pop Bubble Rock — Ark, hosted by Brooks — Revolution, hosted by Propbox and Covert — Lola Lo, hosted by Cherry — Bar Bah, hosted by Remake Remodel."
    ]);

    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-24",
      "time_start"        =>  "18:00",
      "time_end"          =>  "20:00",
      "title"             =>  "Postgraduate Pizza Evening",
      "location_name"     =>  "Academy 2, Students' Union",
      "location_address"  =>  "Manchester Academy",
      "cover"             =>  "Postgrad.Pizza.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-22",
      "time_start"        =>  "14:00",
      "time_end"          =>  "15:30",
      "title"             =>  "Living at Home Students Speed Meet",
      "location_name"     =>  "Council Chambers, Students' Union",
      "location_address"  =>  "Students' Union",
      "cover"             =>  "Living.At.Home.1600x900.jpg"
    ]);
    factory(App\Event::class, 'welcome_week')->create([
      "date_start"        =>  "2016-09-21",
      "time_start"        =>  "12:00",
      "time_end"          =>  "13:30",
      "title"             =>  "Volunteering Showcase",
      "location_name"     =>  "Council Chambers, 2nd floor, Students' Union",
      "location_address"  =>  "Students' Union",
      "description"       =>  "Activities:<ul><li>Take part in micro-volunteering that will support our work in the local community</li><li>Sign-up to one-off volunteering opportunities with children and adults</li><li>Have a go at quizzes and get to know the issues we tackle in Manchester</li></ul>"
    ]);
  }
}
