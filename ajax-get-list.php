<?php
    // empty JSON
    $methodType = $_SERVER['REQUEST_METHOD'];
    $data = array("msg" => "$methodType");

    if ($methodType === 'GET') {
        // answer GET call
        //$date = date("Y-m-d");
        // has to be a PHP array, not a string!

        if(isset($_GET['id']) && !empty($_GET['id'])) {

            if($_GET['id'] === "aquarius") {

                   $data = array("msg:" => "Personal and Social Life in 2015: 2015 sees you firmly in control of 
                    your own world, Aquarius, as well as prominent and lucky in public. Jupiter is at the top of 
                    your chart all year. You can keep your private goals and desires private and still shine and 
                    work wonders for others. Any nervousness won't show in your appearance or how you present yourself. 
                    Saturn in fiery Sagittarius supports you. Friends and family will see how hard you work and 
                    won't slow you down. But if you want help, just ask. Mercury and Venus in Aquarius oppose Jupiter 
                    and anchor your chart for the year. Mercury goes retrograde in Aquarius (January 21-February 11), 
                    making you sharper and more cautious. Your health looks strong, but overdoing things will be an 
                    ongoing concern. Be safe and avoid silly, careless accidents. It's a very well-balanced but high 
                    energy year, Aquarius!");

            } else if($_GET['id'] === "aries") {

                     $data = array("msg:" => "Your year starts off so hot and high-energy, Aries, that you may sometimes 
                        look in the mirror and wonder who that person is! Your true New Year, Aries, begins the day after 
                        a Solar Eclipse (March 21 - the day the Sun enters your sign), with Uranus and Mars both conjunct 
                        the Moon. Feelings may run rampant for a few weeks, but life will settle down to a subdued roar and 
                        thunder, leaving you to feel like you could succeed at just about anything.Use that confidence and 
                        energy while being wildly creative, social, and happy in August when the Sun meets Jupiter in fiery Leo.
                        The September 13 Solar Eclipse is a brief but intense moment to look back. Are you staying healthy and on track?
                        In November, be willing to take on more responsibility and authority, and afterward find yourself 
                        to be a more matured, refined person. This helps greatly in any career or business situation that might attract you later.");
            
            } else if($_GET['id'] === "cancer") {

                     $data = array("msg:" => "You may feel a bit like a sea creature out of water this year, with only sensitive Neptune in 
                        a fellow Water Sign (Pisces). This will illuminate your instincts, feelings, and intuition compared to all the other signs. 
                        Keeping your emotions controlled may be the biggest challenge in late June and July, when the Sun and Saturn move into 
                        Water Signs, too. The first two months you will be focused more on others, but make sure you also take good care of yourself 
                        so you can properly be there for loved ones or friends if they need you. People keep you busy with fun in May and June. 
                        Your mind may motor in high gear while your attention zooms in on family, home, and what you love best. Things should 
                        calm down after the Sun-Mars conjunction on June 14. With the Moon in Leo square Saturn in Scorpio on the Summer Solstice, 
                        you may not feel charming, but everyone will see your charm throughout the rest of the year!");

            } else if($_GET['id'] === "capricorn") {

                     $data = array("msg:" => "Make a major new start in 2015, Capricorn, or perhaps several minor ones. Let your heart and passion 
                        be your guides. Then be your own best friend rather than your own worst enemy. (All unlike you, I know!) Trust your gut. 
                        A slowly forming Jupiter-Saturn square (not perfected until August) will help keep you from going too far, too fast, or off track.
                        Family supports you in a big way, perhaps wondering what took you so long. You have great ambition and energy for your work 
                        this year, and also great compassion. Your Capricorn year actually starts with the Capricorn New Moon (December 21, 2014). 
                        The day before, a Mars-Uranus sextile guarantees that you'll try your best and invent whatever you need, and the Venus-Pluto 
                        conjunction makes sure that you're noticed. Go out there and be amazing! Find healthy ways to de-stress and to nurture and 
                        encourage yourself. This becomes increasingly important as the year progresses. Remember, it's not failure if it doesn't work 
                        the first time. Persist!");

            } else if($_GET['id'] === "gemini") {

                     $data = array("msg:" => "2015 is an exciting year, Gemini, when relationships bloom, opportunities for personal growth and maturity 
                        abound, and friends and family become more cherished. As blazing and energetic as the year begins, you have plenty of built-in 
                        pauses to stay on track and take care of all those people and things you love.");

            } else if($_GET['id'] === "leo") {

                     $data = array("msg:" => "You have a well-balanced year ahead, Leo, with plenty of passionate Fire, sensitive Water, practical Earth, 
                        and diplomatic Air energies at your fingertips. Neptune will offer you illusions and comfortable escapes in February. Uranus will 
                        surprise and energize you in April. Mercury and Mars will tug at your heartstrings and family in July. Venus will make daily life 
                        more pleasant and comfortable than ever in September. What a year! Jupiter spends the first half of 2015 in your sign, Leo, 
                        bringing good luck and abundance, but also the temptation to enjoy the good things in life in excess. Try to use moderation 
                        in all things, especially eating, spending, and socializing, and simply share the wealth. ");

            } else if($_GET['id'] === "libra") {

                     $data = array("msg:" => "2015 gives you a deeper desire for material security and luxury. This means you'll have greater motivation 
                        and ambition. In your gentle, agreeable Libra way, you'll accomplish more and attract more compatible people into your camp. 
                        You'll be extremely lucky with people, so network away! Then put social activities on pause during August, rest up and re-energize.
                        Mercury goes retrograde in your sign (September 17 - October 9) and this is a great thing, too. Consolidate your team of friends 
                        and family members now, and see clearly who your truest supporters are. November and December are powerful times for you as well, 
                        particularly the last two days of December when your planet Venus moves into glorious Sagittarius.");

            } else if($_GET['id'] === "pisces") {

                     $data = array("msg:" => "If you've ever dreamed of taking a step up and being a bigger, better you, 2015 is your year! Fresh, unexpected 
                        opportunities are everywhere, and doors will magically open for you, Pisces. Be sensible, not giddy. Take all this good luck seriously, 
                        and say 'thank you' often. Give yourself enough attention and be healthy, especially in January through April. January and February 
                        (with the January 19 Mars-Neptune conjunction and the February 21 Venus-Mars conjunction) will keep you busy but happy. ");

            } else if($_GET['id'] === "sagittarius") {

                     $data = array("msg:" => "What a great year to be a Sagittarius! With so much admiration, respect, and authority coming your way, it could 
                        be hard to remember to be modest. Make the effort, though, be gracious and understated, and people will regard you all the more. Be 
                        methodical and then trust your sound, critical judgment. Emotional judgment is strong and true, too, especially in February. Saturn in 
                        Sagittarius this year adds to your patience and careful treatment of people and situations. Family and friends will think well of you 
                        no matter what, and could lavish extra affection on you in the springtime.");

            } else if($_GET['id'] === "scorpio") {

                     $data = array("msg:" => "Powerful good luck and instant energy are at your fingertips in 2015, Scorpio. Given your natural level of intensity, 
                        you'll need extra effort almost every day to not burn out or frazzle the people around you. Be cool and a bit distant if necessary in 
                        February and March when instincts are tested and people become harder to read. Reserve judgment about others but don't over-idealize them 
                        - namely friends and family.When Mars conjuncts Uranus (March 11) and when the Sun conjuncts Uranus (April 6), the Moon will be in Scorpio, 
                        affecting you more strongly than most other signs. Be braced for surprises.");
                
            } else if($_GET['id'] === "taurus") {

                     $data = array("msg:" => "2015 is a great year for Taurus to begin something new and maybe choose a new direction for some part of your life. 
                        Mentally, you may have been preparing, and now's the time. The Sun and Moon are both in Taurus as your year starts, so April and May could 
                        be the most agreeable for your plans. Love and relationships in general may take a slight hit in July and August when Venus goes retrograde 
                        from July 25 until September 6. Sometimes you need to go extra slow with people and affairs of the heart, that's all.Be extra creative and 
                        you'll be popular all summer long. The Mercury retrograde in Libra (September 17 to October 9) might stress relationships, but Venus rules 
                        here, too, and Taurus knows how to be sweet. Be healthy, happy, and good to yourself, especially in November and December!");
                
            }else if($_GET['id'] === "virgo") {

                     $data = array("msg:" => "2015 is a year of great luck and abundance, Virgo. There will also be strong feelings, opinions, and a great drive to 
                        succeed. It may be hard to think straight all the time amidst so much activity and bustling daily life, but you'll do your best. Expect 
                        opportunities and congenial people around you from January 1, as your ruling planet Mercury is in Capricorn along with the Sun, Venus, 
                        and Pluto. Capricorn is an Earth Sign and very compatible with you, Virgo. Jupiter enters Virgo on August 11. From then on, amplified good 
                        luck and prosperity should blossom. Friends and family (particularly siblings) may be extra generous. It's a year to bring each other many happy times.");
                
            }  else {
                $data = array("msg" => "Sign not recognized.");
            }


     
        } else {
            $data = array("msg" => "No id sent.");
        }
    } else {
        // simple error message, only taking GET requests
        $data = array("msg" => "Error: only GET allowed");
    }

    echo json_encode($data, JSON_FORCE_OBJECT);

?>
