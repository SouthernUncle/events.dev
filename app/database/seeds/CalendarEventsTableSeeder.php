<?php

use Carbon\Carbon as Carbon;

class CalendarEventsTableSeeder extends Seeder {

	public function run()
	{
		// PAPER TIGER
		// Lydia
		$ce = new CalendarEvent();
		$ce->title 		 = 'Lydia';
		$ce->description = 'ALL AGES. Lydia is an indie rock band from Gilbert, Arizona formed in 2003 by front man Leighton Antelman. After a brief hiatus in 2010, the band returned in September 2011 with a new song, “Dragging Your Feet in the Mud” and Paint It Golden was released shortly after in October of 2011. The band has recently released their first single “Knee Deep” from the new record, Devil, produced by Colby Wedgeworth. Leighton Antelman and the new full band line-up’s new release will be their fifth.';
		$ce->start 		 = '2015-09-17 19:00:00';
		$ce->price 		 = 15;
		$ce->location_id = 1;
		$ce->user_id	 = 1;
		$ce->img_url	 = 'lydia.jpg';
		$ce->save();

		// Black Lips
		$ce = new CalendarEvent();
		$ce->title 		 = 'Black Lips';
		$ce->description = 'Atlanta\'s beloved sons the Black Lips entered last year through a screaming cloud of sweat, smoke, blood, and beer mist, in front of a dangerously packed hall in New Orleans\' French Quarter. If a band\'s bipolarity runs on a touring vs. recording-an-album spectrum, then the previous year was the mother of all manic spells.
			After a spring and summer running the usual festival circuit in North America and Europe, the Lips embarked on a two-month fall tour of the Middle East. They were tailed by Georgia rock-doc royalty Bill Cody, of Athens, GA - Inside/Out fame, who filmed the band playing for kids in Tunis and Cairo who had just overthrown their government, kids in Iraq who barely have a government, and kids in Dubai whose government is richer than God (and might control a genie).
			As Cody assembled his footage into the feature Kids Like You and Me, the band returned home from the New Year\'s maelstrom and began settling into album mode. Songs had piled up in the two years since 2011\'s Arabia Mountain. "We went into the studio with about 80% of the record written," says bassist Jared Swilley. "which is a little more than usual for us. Joe (Bradley, drums) usually puts together all the parts for his songs on his own, and Ian (St. Pe, guitar) writes a lot of his music. I like to make mine a little more collaborative, like Cole (Alexander, also guitar)."
			Recording for Underneath the Rainbow ("We were going to call it The Dark Side of the Rainbow, then we googled it and realized that\'s what they call that thing where you watch The Wizard of Oz while listening to Pink Floyd and it syncs up") was split between New York with Thomas Brenneck, who was recommended by Arabia Mountain producer Mark Ronson, and Nashville with the the Black Keys\' Patrick Carney, who offered to help produce in a Mexico city hotel room just before dawn. "It was one of those super-late-night/super-early-morning drunktalk sort of situations, so we weren\'t sure if he meant it," explains Jared. "People do that all the time."
			Early internet conjecture, based around on the album\'s lead single ("Boys in the Woods"), Carney\'s choice of a country studio in Nashville, and an offhand reference to "roots music," pegged Underneath the Rainbow\'s sound as a blend of southern rock with throwback C&W and blues. Which is a weird description for a record containing the first Black Lips\' song with a prominent synth ("Funny"), and even less apt for an overall album that owes just as much to the kiwi pop of New Zealand\'s South Island and the Chicago South Side\'s Crucial Conflict as it does the standard American South. "They got it all wrong," says Jared, "they were asking \'Is there a "radical departure" or "new direction" on this album?\' so I said, no it\'s still roots music, which is what we\'ve been doing from the start and which all rock and pop music derives from.\
			"Although ["Funny"] is a new direction as far as it having more of a commercial sound," adds Cole.
			"Honestly, that synth getting in there was a fluke."';
		$ce->start 		 = '2015-09-18 19:00:00';
		$ce->price 		 = 16;
		$ce->location_id = 1;
		$ce->user_id	 = 1;
		$ce->img_url	 = 'blacklips.jpg';
		$ce->save();

		// Swervedriver
		$ce = new CalendarEvent();
		$ce->title 		 = 'Swervedriver';
		$ce->description = 'In 1990 London\'s indie-rock guitar scene was developing a distinctive new psychedelic sound: swirling, dreamy, mysterious and very much of the British Isles. One band stood out by hot-wiring that sound with the subversive energy of some American bands of the era and that band was Swervedriver. They had the liquid distortion of shoegaze combined with the cool swagger of Hüsker Dü, Sonic Youth, and Dinosaur Jr - giving them a unique sound and attitude. 
			Relocating from Oxford to London, guitarists Adam Franklin and Jimmy Hartridge, bassist Adi Vines and drummer Graham Bonnar debuted with a series of landmark Creation Records EPs, Son of Mustang Ford, Rave Down, and Sandblasted. Their full-length debut, 1991\'s Raise, to this day is hailed by Pitchfork as an album full of "muscular, scorching guitars" that "still bring the noise like nobody\'s business" with Mojo stating that Son of Mustang Ford "remains one of the most glorious tunes to emerge in the wake of the so-called grunge explosion of \'89, matching Adam Franklin and Jim Hartridge\'s motorised guitar-weaving with a beguiling, below-the-line vocal melody and lyrics that celebrated the joy of wide-open American freeways."
			The band toured the album extensively, including a lengthy US tour with Soundgarden that brought their wall of sound to thousands. However with both Bonnar and Vines leaving the band not long after, the 1992 EP Never Lose That Feeling looked like it might be Swervedriver\'s (albeit scorching) swan song. Then in late 1992, Franklin and Hartridge demoed a new tune "Duress," recruited drummer Jez Hindmarsh and set about recording a second full-length albumMezcal Head with Alan Moulder (My Bloody Valentine/Led Zeppelin), which included their biggest singles "Duel" and "Last Train To Satansville." Touring extensively again, this time with Smashing Pumpkins and Medicine and with new bass player Steve George onboard, their sound was further imprinted on people\'s minds.';
		$ce->start 		 = '2015-09-19 20:00:00';
		$ce->price 		 = 15;
		$ce->location_id = 1;
		$ce->user_id	 = 1;
		$ce->img_url	 = 'swervedriver.jpg';
		$ce->save();

		// Dirty Fences
		$ce = new CalendarEvent();
		$ce->title 		 = 'Dirty Fences';
		$ce->description = 'Dirty Fences from New York City sling 70s street-level punk rock & roll. Tommy Ramone beat. Harmonies. Tons of vocals. From fast slasher power pop tunes to country ballads to Eddie Cochran style parents­just­dont­understand sex rock and roll, they know their stuff and have a lot of fun with it.';
		$ce->start 		 = '2015-09-22 19:00:00';
		$ce->price 		 = 10;
		$ce->location_id = 1;
		$ce->user_id	 = 1;
		$ce->img_url	 = 'dirtyfences.jpg';
		$ce->save();


		// KOROVA
		// The Rise of the Broken
		$ce = new CalendarEvent();
		$ce->title 		 = 'The Rise of the Broken';
		$ce->description = 'Kevin Rodriguez founded the Rise of the Broken while being on his journey for a year in Germany. He started learning how to play the acoustic guitar so he could play along with his friends and bond with them. He started writing a couple songs to express him and to perform to people. He then recorded demos of a couple songs and he quickly started getting people\'s attention in Germany and back in the U.S. through the web. He then started playing many shows, both in Germany and in the U.S., to spread his love for music. He home-recorded an EP that was released in the summer of 2010 called, "The Two Sided Story." All his time and effort spent on his music set out to transform his old songs into something new and wrote new songs to make them into a full band set to make his new album called, "Nickled-and-Dimed," which was released on November 1st, 2011. The band left on tour on the summer of 2012 to promote the album to their fans and friends around the Midwest and East coast. The band is now setting into a new journey with their sound and music. The band has worked hard on their new album, "Stop Chasing Ghosts," which is a more upbeat and an alternative derived sound. The new album will portray themes and lyrics that one can relate them to everyday life. "Stop Chasing Ghosts," is an album that will hook you with their catchy tunes and relatable lyrics, and will make you feel like you\'re not alone in situations you\'re going through. The album is life and experiences written down and spoken through with music, it\'s years of hard work written down to make what this album is and what you will experience, that is, "Stop Chasing Ghosts."';
		$ce->start 		 = '2015-09-16 19:00:00';
		$ce->price 		 = 8;
		$ce->location_id = 2;
		$ce->user_id	 = 1;
		$ce->save();

		// Buried Under Texas
		$ce = new CalendarEvent();
		$ce->title 		 = 'Buried Under Texas';
		$ce->description = 'Buried Under Texas 5th Anniversary
			Of Grand Design CD Release Mark & Richie\'s Birthday
			I Survived - Kristof Kaupert Birthday
			A Sunday In Salem
			Exit Humanity- Brandon Cross & Mario Sanchez Birthday
			Life Cycles
			Mauler - McAllen, Texas
			Points Of Authority
			Havenbrook
			Ammo For My Arsenal
			Crossways
			FACELIFT
			For All Mankind - Eagle Pass, TX
			Blink After Midnight
			Throne of the Beheaded - First show
			Michael Turnini
			Doors: 4:00
			All Ages $10 / $8 with flyer';
		$ce->start 		 = '2015-09-19 16:00:00';
		$ce->price 		 = 8;
		$ce->location_id = 2;
		$ce->user_id	 = 1;
		$ce->save();

		// Lord of War
		$ce = new CalendarEvent();
		$ce->title 		 = 'Lord of War';
		$ce->description = 'Since 2008, Lord of War has been inflicting its unique brand of thematically driven progressive brutality on their home town of San Diego, CA. Drawing inspiration from all across the modern extreme metal spectrum and paying homage to such revered acts as The Arcane Order, Through the Eyes of the Dead, 
			and The Black Dahlia Murder. After enduring several lineup changes over the course of their formative years, the band has recently come to what is definitively the most cohesive and dedicated lineup to date.';
		$ce->start 		 = '2015-09-19 21:00:00';
		$ce->price 		 = 7;
		$ce->location_id = 2;
		$ce->user_id	 = 1;
		$ce->save();

		// The Independents
		$ce = new CalendarEvent();
		$ce->title 		 = 'The Independents';
		$ce->description = 'The Nightmare starts off on a hot humid night, deep beneath a full moon in the swamps of South Carolina. Under the moss covered dead oak trees, surrounded by the loud eerie groans of bull frogs, four creatures of the night come together to form The INDEPENDENTS....
			Formed in the early 90\'s by Evil Presly and Willy B, The Independents was born out of the frustration of music being stereo typed and just plain fucking boring. Willy and Evil both loved all music, from Conway Twitty to Iron Maiden, from The Ramones to Etta James and the Specials. Both loved horror and sci-fi movies and wanted to find some way to include it in their music. Evil started writing lyrics that told horror tales while Willy kept the guitar in one hand and gave the entire world the finger with the other. They rallied their friends together and started on their long journey through members, with only the goal of playing the music they wanted, when, where, and how they wanted.
			After a few years and a few members, the guys had gathered a good following through rough demos and Compilation records from coast to coast. They signed a small indie deal with Rockduster Records and recorded their first album "In For The Kill". It was during this time that Evil met and befriended the bass player for the legendary Ramones, CJ Ramone. CJ got the Independents on a few opening dates of the Ramones\' Acid Eaters tour. On their way to the first show with the Independents, Joey Ramone listened to some of the Independents demos given to him by CJ. He really dug what he heard and within minutes of arriving to the venue was introduced to the guys. After the shows, Joey made an offer the guys could not refuse. He told them he wanted to manage the band.';
		$ce->start 		 = '2015-09-20 20:00:00';
		$ce->price 		 = 3;
		$ce->location_id = 2;
		$ce->user_id	 = 1;
		$ce->save();

		// Puro Slam
		$ce = new CalendarEvent();
		$ce->title 		 = 'Puro Slam';
		$ce->description = 'PuroSlam is the only nationally certified poetry slam operating in San Antonio, Texas, USA. Started in 1999 by Benjamin Ortiz & now hosted by Jason "Shaggy" Gossard.
			PuroSlam has earned a national reputation as one of the toughest, roughest, rowdiest poetry slams in the United States, bringing the exciting world of performance poetry to South Texas on a weekly basis. \“I\’m excited about San Antonio,\” says Boston poet Dawn Gabriel in a 2006 article in the San Antonio Current, \“because they have a reputation for being the meanest Slam poets around.\”';
		$ce->start 		 = '2015-09-22 21:30:00';
		$ce->price 		 = 1;
		$ce->location_id = 2;
		$ce->user_id	 = 1;
		$ce->save();

		// Toxic Holocaust
		$ce = new CalendarEvent();
		$ce->title 		 = 'Toxic Holocaust';
		$ce->description = 'Portland metal punk assailants, Toxic Holocaust, were formed by Joel Grind in 1999 to pay homage to the raw days of metal and punk. Influenced by bands like Discharge, Venom, Slayer and G.B.H. - Toxic Holocaust create the perfect marriage of punk angst and metal aggression. 
			Toxic Holocaust continue to road-dog across the world, having toured with Municipal Waste, Napalm Death, At the Gates, Danzig, Satyricon, English Dogs, The Casualties, and Gwar, to name a few, followed up by an impending European tour that will run throughout June.';
		$ce->start 		 = '2015-09-24 19:00:00';
		$ce->price 		 = 13;
		$ce->location_id = 2;
		$ce->user_id	 = 1;
		$ce->img_url	 = 'toxicholocaust.jpg';
		$ce->save();


		// MAJESTIC
		// Peter Cetera
		$ce = new CalendarEvent();
		$ce->title 		 = 'Peter Cetera';
		$ce->description = 'PETER CETERA has had two distinct musical careers. From 1968 through 1986 Peter was the singer, songwriter, and bass player for the legendary rock group \“CHICAGO.\”  In his time with the group, they recorded 18 of the most memorable albums of a generation, including such hits as \“If You Leave Me Now,\” \“Hard to Say I’m Sorry,\” \“Baby What a Big Surprise,\” \“You’re the Inspiration,\” and \“Along Comes a Woman.\”
			A solo artist since 1986, Peter has recorded 10 time-honored CD\’s including his #1 hits, the Academy Award nominated song \“The Glory of Love\” from the hit movie \“The Karate Kid II,\” \“The Next Time I Fall\” with Amy Grant, \“Feels Like Heaven\” with Chaka Kahn, \“After All\” with Cher from the motion picture \“Chances Are,\” \“No Explanation\” from the mega hit film, \“Pretty Woman\” and the unforgettable \“Restless Heart.\”
			Peter is currently touring with his 7 piece electric band, THE BAD DADDY\’S and still enjoys performing his timeless hits which continue to touch the lives of so many people worldwide.';
		$ce->start 		 = '2015-09-17 20:00:00';
		$ce->price 		 = 49.50;
		$ce->location_id = 3;
		$ce->user_id	 = 1;
		$ce->img_url	 = 'cetera.jpg';
		$ce->save();

		// Buttercup
		$ce = new CalendarEvent();
		$ce->title 		 = 'Buttercup + Alyson Alonzo';
		$ce->description = 'Buttercup plays the historic Empire Theater. This promises to be one of the best shows of 2015, perhaps of all time. Come enjoy this gorgeous venue, in a performance that promises a rock set of Buttercup classics new and old. Recently, Buttercup is nearing completion of a group of 12 new songs for an upcoming recording. This recording gets back to Buttercup\'s rock and roll roots.';
		$ce->start 		 = '2015-09-18 21:00:00';
		$ce->price 		 = 10;
		$ce->location_id = 3;
		$ce->user_id	 = 1;
		$ce->save();

		// The Beach Boys
		$ce = new CalendarEvent();
		$ce->title 		 = 'The Beach Boys';
		$ce->description = 'As The Beach Boys mark more than a half century of making music, the group continues to ride the crest of a wave unequalled in America’s musical history.  The Beach Boys have become synonymous with the California lifestyle and have become an American icon to fans around the world. The Beach Boys have sold over 100 million records worldwide and have received more than 33 RIAA Platinum and Gold record awards.  The Rock And Roll Hall of Famers where also honored at the 2001 Grammy Awards with the Lifetime Achievement Award. With more than five decades of touring under their belts, The Beach Boys have performed more concerts than any major rock band in history.';
		$ce->start 		 = '2015-10-08 20:00:00';
		$ce->price 		 = 75;
		$ce->location_id = 3;
		$ce->user_id	 = 1;
		$ce->img_url	 = 'beachboys.jpg';
		$ce->save();

		// Pepe Aguilar
		$ce = new CalendarEvent();
		$ce->title 		 = 'Pepe Aguilar';
		$ce->description = 'Son of Mexican icons Antonio Aguilar and Flor Silvestre, critics consider Pepe Aguilar "A real star of Latin music".
			Pepe has firmly put the regional Mexican scene on the map across multiple markets. He has garnered an impressive amount of awards with 24 albums (16 studio albums), over 13 million in record sales and unprecedented credibility that includes 9 Grammy awards (NARAS and LARAS). 
			Pepe Aguilar\’s career has progressed in parallel with the evolution of the music industry over the past 25 years while the Hollywood Walk of Fame star continues to rank among Billboards\’ top charts, amplifying his fan base throughout the US and Latin America.';
		$ce->start 		 = '2015-10-11 19:30:00';
		$ce->price 		 = 139;
		$ce->location_id = 3;
		$ce->user_id	 = 1;
		$ce->img_url	 = 'pepe.jpg';
		$ce->save();


		// AZTEC
		// Tori Kelly
		$ce = new CalendarEvent();
		$ce->title 		 = 'Tori Kelly';
		$ce->description = 'Tori Kelly first rose to attention when her cover of Frank Ocean\’s \“Thinkin Bout You,\” went viral, racking up over 22 million views. To date, her YouTube channel boasts over ONE MILLION YouTube Subscribers with over 89 million views. Now, two EP\’s later Handmade Songs, which Kelly self-penned, produced, mixed and released, and Foreword, she plans to release her first full length debut this spring.
			Kelly co-wrote \“Nobody Love\” off her 2015 Spring debut alongside Rickard Goransson and Max Martin. Martin says, \“After hearing Tori sing, we felt so inspired that we had no choice but to get involved. It\’s been such a pleasure to be a part of her journey.\” She also co-wrote with such vets as Savan Kotecha, Toby Gad, Claude Kelly, Chuck Harmony, Wolf Cousins, and Ed Sheeran. The album, she says, does not depart from her soulful roots. \“It\’s like a marriage between that soulful urban thing and a mainstream pop vibe. It was hard to get to that place, but once we had \‘Nobody Love,\’ I knew we\’d cracked the code. It felt seamless.\”
			Working with one of the most successful hit makers in the industry is a long way from Kelly\’s early years making songs in her bedroom and posting them online. Born and raised in Temecula, California, Kelly is the daughter of musicians, her dad is a singer and bassist and her mom plays piano and saxophone. She sites early influences like gospel singer Crystal Lewis, Jill Scott, Jeff Buckley, and Maxwell.
			Over the past year and a half, Kelly has sold out shows in several major cities (including The Troubadour and The Roxy in Los Angeles, the Bowery Ballroom and Gramercy Theatre in New York City, and Bush Hall in London), headlined a nine-city sold-out U.S. tour, and supported Ed Sheeran, and Sam Smith on tour.
			\“I\’m excited to get out and play for people. That\’s always the dream.\”';
		$ce->start 		 = '2015-10-03 19:00:00';
		$ce->price 		 = 115;
		$ce->location_id = 4;
		$ce->user_id	 = 1;
		$ce->img_url	 = 'torikelly.jpg';
		$ce->save();

		// Chief Keef
		$ce = new CalendarEvent();
		$ce->title 		 = 'Chief Keef';
		$ce->description = 'Keith Cozart, better known by his stage name Chief Keef, is an American rapper and record producer from Chicago, Illinois. Growing up in Chicago\'s Englewood neighborhood, Keef began rapping at an early age, and used his mother\'s karaoke machine and blank tapes to record his music. During his teenage years and while under house arrest, Keef\'s music videos were met with acclaim from local high school students.';
		$ce->start 		 = '2015-10-07 19:00:00';
		$ce->price 		 = 37;
		$ce->location_id = 4;
		$ce->user_id	 = 1;
		$ce->img_url	 = 'keef.jpg';
		$ce->save();

		// Andy Mineo
		$ce = new CalendarEvent();
		$ce->title 		 = 'Andy Mineo';
		$ce->description = 'Whether he\’s on stage bringing an audience to its feet with his riveting performance or off stage fielding interview questions with a potent combination of intellect and wit, it\’s obvious Andy Mineo is a born communicator and hip hop music is his instrument for reaching the masses. \“It is absolutely undeniable that hip hop is becoming the universal language,\” Mineo says expressing an unbridled enthusiasm for his artistic vehicle. \“It’s so influential because you are able to say so much in a short period of time. The essence of hip hop is the boldness of it so you\’re able to be exactly who you are. You are able to say exactly what you want. You represent exactly what is deepest and dearest to you and people respond to that. They respond to that realness.\”';
		$ce->start 		 = '2015-10-08 18:00:00';
		$ce->price 		 = 33;
		$ce->location_id = 4;
		$ce->user_id	 = 1;
		$ce->img_url	 = 'mineo.jpg';
		$ce->save();


		// TEN ELEVEN
		// Ideophonic
		$ce = new CalendarEvent();
		$ce->title 		 = 'Ideophonic';
		$ce->description = 'A beer bar with live music or a music venue with good beer. Call us what you want. We just want you to have a good time. 
			Located just north of downtown along the banks of Riverwalk North.';
		$ce->start 		 = '2015-09-18 19:00:00';
		$ce->price 		 = 0;
		$ce->location_id = 5;
		$ce->user_id	 = 1;
		$ce->save();


		// ALAMO CITY MUSIC HALL
		// Slum Village
		$ce = new CalendarEvent();
		$ce->title 		 = 'Slum Village + Cool Nutz';
		$ce->description = 'Chances are, if you are anywhere near the Detroit music scene, you have heard of the influential hip hop trio that makes up Slum Village. The group was founded in the early 90\′s by 3 childhood friends: Baatin, T3, rapper and producer J Dilla, who all grew up together in the Conant Gardens neighborhood of Detroit, MI. After leaving Pershing High School, the trio began to forge a path into the Detroit underground hip hop scene and quickly found themselves steadily gaining popularity, where they originally went by the name Ssenepod.
			With a growing momentum now cemented in the underground, the group took on a forward trajectory toward bigger and better things, and in 1991 changed their name to Slum Village. J Dilla joined the production team known as The Ummah, which produced the two last A Tribe Called Quest studio albums, as well as hits for a number of R&B and hip hop musicians, and in 1996, they recorded their first album Vol. 1, recorded in Dilla\'s basement and RJ Rice Studios, it was critically acclaimed in the Detroit underground scene. It later found its way into the hands of A Tribe Called Quest\'s own Q-Tip, who played it for some of hip hop\'s elite, such as Busta Rhymes, Questlove, and D\'angelo. This fruitful alliance led to an opening gig for A Tribe Called Quest on their Farewell tour in 1998. 
			COOL NUTZ 
			With close to 20 years of service to Hip-Hop culture, Terrance Scott aka Cool Nutz has been a class act and Diplomat for Northwest Hip-Hop. While some have chosen to simply pursue success on an individual basis, Cool Nutz chose to put the region and City of Portland on his back and work to give an area typically unheard a voice.';
		$ce->start 		 = '2015-09-19 20:00:00';
		$ce->price 		 = 18;
		$ce->location_id = 6;
		$ce->user_id	 = 1;
		$ce->img_url	 = 'slum.jpg';
		$ce->save();

		// Lil Durk
		$ce = new CalendarEvent();
		$ce->title 		 = 'Lil Durk';
		$ce->description = 'Chicago\'s Lil Durk isn\'t as famous as Chief Keef, and he\'s not as prolific as King L, but he is just as talented as either, carving out his own niche in the city\'s drill scene with a unique, creative, melodic flow and an extremely consistent catalog.
			A Def Jam signee and member of the Glory Boyz Entertainment (GBE) clique, Durk\'s I\'m Still A Hitta and Life Ain\'t No Joke mixtapes are two of the better hip-hop releases this year. The former, in particular, is a tight, focused, and singular document of Chicago rap in 2012.';
		$ce->start 		 = '2015-09-23 20:00:00';
		$ce->price 		 = 17;
		$ce->location_id = 6;
		$ce->user_id	 = 1;
		$ce->img_url	 = 'durk.jpg';
		$ce->save();

		// Trivium + Tremonti
		$ce = new CalendarEvent();
		$ce->title 		 = 'Trivium + Tremonti';
		$ce->description = 'With their fifth full-length album, In Waves, Trivium make a crucial statement.
			It\'s a statement about writing their own rules about what it means to be a contemporary metal band. It\'s a statement that encompasses boundary-defying music, moods, movement, and visuals. It\'s a statement that\'s emblematic of their evolution. It\'s a statement that\'s going to impact anyone open to it.
			While on the road in 2009, the first rumblings of In Waves began. Trivium vocalist and guitarist Matt Heafy had already started pondering the direction the band would take for their fifth offering. So far, they\'d excelled at the standard hallmarks of the genre, and he wanted to do something new.
			Each one of their albums—Ascendancy (2005), The Crusade (2006), and Shogun (2008)—garnered unanimous critical and fan acclaim. Ascendancy cemented the band\'s place in the metal-verse, selling over half-a-million copies worldwide.
			TREMONTI -
			Dedication breeds the best results. Grammy Award-winning multi-platinum guitarist and singer Mark Tremonti continues to wholeheartedly commit himself to his craft, barely drawing a breath for air in between his eponymous band, Alter Bridge, and Creed. Following tours supporting his critically acclaimed 2012 solo debut, All I Was, and Alter Bridge\'s chart-topping 
			Fortress, he immediately began writing in his Orlando Studio at the top of 2014.';
		$ce->start 		 = '2015-10-08 20:00:00';
		$ce->price 		 = 27;
		$ce->location_id = 6;
		$ce->user_id	 = 1;
		$ce->img_url	 = 'trivium.jpg';
		$ce->save();

		// Thundercat
		$ce = new CalendarEvent();
		$ce->title 		 = 'Thundercat';
		$ce->description = 'Bassist/songwriter/vocalist Stephen Bruner, aka Thundercat, has music deeply rooted within. His father, Ronald Bruner, Sr., is an internationally renowned jazz drummer who played with the Temptations, Diana Ross, Gary Bartz and Gladys Knight. His brother Ronald Bruner, Jr., a Grammy-winning drummer, has played with the likes of Roy Hargrove, Stanley Clarke, and Wayne Shorter. Stephen joined his brother as a member of West Coast punk vets Suicidal Tendencies, playing bass on their worldwide tours while still in high school. He also toured through Japan with Stanley Clarke at the age of 16.
			As Thundercat, Bruner takes his jazz roots and works with a mix of artists that suit his wildly experimental sensibilities – ranging from Flying Lotus, Erykah Badu, and Stanley Clarke, as well as more recent collaborations with Wiz Khalifa and Earl Sweatshirt, to name but a few. After meeting and touring with Flying Lotus, the two artists collaborated on Lotus\' 2010 LP \'Cosmogramma\' on the track \'MmmHmm.\' Their kindred sense of musicality led to Thundercat\'s 2011 solo debut \'The Golden Age of Apocalypse,\' co-produced by Flying Lotus, which opened Bruner up to a new stratosphere of songwriting and artistic exploration.';
		$ce->start 		 = '2015-09-25 20:00:00';
		$ce->price 		 = 16;
		$ce->location_id = 6;
		$ce->user_id	 = 1;
		$ce->img_url	 = 'thundercat.jpg';
		$ce->save();


		// SAM'S BURGER JOINT
		// Guitar Shorty
		$ce = new CalendarEvent();
		$ce->title 		 = 'Guitar Shorty';
		$ce->description = 'Legendary guitarist/vocalist Guitar Shorty is a giant in the blues world. Credited with influencing both Jimi Hendrix and Buddy Guy, Guitar Shorty has been electrifying audiences for five decades with his supercharged live shows and his incendiary recordings. Like a bare knuckled boxer, Shorty strikes with his blistering, physical guitar playing and his fierce vocals, connecting directly with body and soul. What really sets Shorty apart is his absolutely unpredictable, off-the-wall guitar playing. He reaches for sounds, riffs and licks that other blues players wouldn\’t even think of. Amazon.com says his guitar work “sounds like a caged tiger before feeding time. His molten guitar pours his psychedelicized solos like lava over anything in his path.” The Chicago Reader declares, “Guitar Shorty is a battle-scarred hard-ass. He slices off his phrases and notes with homicidal fury. He is among the highest-energy blues entertainers on the scene.”';
		$ce->start 		 = '2015-09-17 21:00:00';
		$ce->price 		 = 50;
		$ce->location_id = 7;
		$ce->user_id	 = 1;
		$ce->save();

		// David Ramirez
		$ce = new CalendarEvent();
		$ce->title 		 = 'David Ramirez';
		$ce->description = 'The life of the traveling songwriter certainly seems romantic. But as David Ramirez notched mile number 260,000 traveled in his 2006 Kia Rio, the novelty began to wear off. "I\'ve learned a lot from being alone and isolated," says Ramirez, who until recently toured completely by himself, without a band, manager or anyone else for company. "Yes, it\'s romantic in a way. But it has also been kind of rough on my head and my heart. After a while it made it difficult to connect with people on a personal level when I got home. In hindsight, I can see that it\'s been kind of detrimental. You know, when you travel around alone for months at a time, the world revolves around you. There\'s no one else in the equation. Everything was just about me. It\'s a selfish way of living. And I\'m ready to move on from that."
			It\'s taken three years since that realization, but with his new album \'FABLES,\' out August 28 via Thirty Tigers, Ramirez takes strides towards that personal growth both as a musician and as a man.';
		$ce->start 		 = '2015-09-19 21:00:00';
		$ce->price 		 = 45;
		$ce->location_id = 7;
		$ce->user_id	 = 1;
		$ce->save();

		// Civil Twilight
		$ce = new CalendarEvent();
		$ce->title 		 = 'Civil Twilight';
		$ce->description = '“What am I to build, if my hands are broken, if I\’m not the chosen one?” sings Steven McKellar of Civil Twilight on “Story of An Immigrant”, over a lush, dynamic beat that evokes the sounds of his native South Africa while steeped in the band\’s ever-evolving present. The foursome (Steven, his brother and guitarist Andrew, drummer Richard Wouters and Kevin Dailey on keys and guitar) are living proof of what happens when you stop worrying about being the chosen one and make music built on both the roots that grew you and the love that keeps you thriving every day. Civil Twilight\’s songs embrace every corner of human emotion, balancing delicate, poetic lyrics with sweeping arrangements that touch all the senses: a phrase to make you think; a rolling drumbeat you can feel in your bones; a guitar vamp as illustrative as a picture; a shimmer of keys whose light can nearly be seen and heard.';
		$ce->start 		 = '2015-09-24 20:00:00';
		$ce->price 		 = 50;
		$ce->location_id = 7;
		$ce->user_id	 = 1;
		$ce->img_url 	 = 'civil.jpg';
		$ce->save();


		// TOBIN CENTER
		// Lionel Richie
		$ce = new CalendarEvent();
		$ce->title 		 = 'Lionel Richie';
		$ce->description = 'Lionel Richie. Music Icon. International Superstar.  100 million albums sold worldwide. Oscar winner. 5 time Grammy winner. 16-time American Music Award winner.  Golden Globe winner.  5 time People\’s Choice Award winner.  A World Music Lifetime Achievement Award recipient.  A Star on the Hollywood Walk Of Fame. An ASCAP Lifetime Achievement Award recipient.  A United Negro College Fund Achievement Award recipient.  A Goldene Kamera Award winner. Songwriters Hall of Fame Inductee. Tuskegee Institute Honorary Doctor of Music Degree. Germany\’s ECHO Award for Lifetime Achievement. TV Land Icon Award recipient. Hong Kong\’s Rojo Award winner. Alabama Music Hall of Fame Inductee. Italy\’s San Remo Festival Lifetime Achievement Award winner. World Music Awards Lifetime Achievement Award Winner. National Academy of Recording Arts & Sciences Governors Award winner. Lionel Richie has a discography of albums and singles second to none and is part of the fabric of American pop music.  In fact, Lionel Richie and Irving Berlin are the only two songwriters in history to achieve the honor of having #1 records for nine consecutive years.';
		$ce->start 		 = '2015-10-22 20:00:00';
		$ce->price 		 = 85;
		$ce->location_id = 8;
		$ce->user_id	 = 1;
		$ce->img_url 	 = 'richie.jpg';
		$ce->save();

		// Meat Loaf
		$ce = new CalendarEvent();
		$ce->title 		 = 'Meat Loaf';
		$ce->description = 'Some people think big. Some people think huge. And then there\'s Meat Loaf.  For the past 40 years, he has been a towering monument on the musical landscape.  His legendary 1977 album Bat Out Of Hell transformed this former stage actor into one of the great American rock \'n\' roll icons. That record, with its staggering operatic sound and impassioned vocals, has sold more than 44 million albums worldwide and remains one of the best-selling albums in the world to date.';
		$ce->start 		 = '2015-10-26 19:30:00';
		$ce->price 		 = 125;
		$ce->location_id = 8;
		$ce->user_id	 = 1;
		$ce->img_url 	 = 'meatloaf.jpg';
		$ce->save();

		// Liza Minnelli
		$ce = new CalendarEvent();
		$ce->title 		 = 'Liza Minnelli';
		$ce->description = 'Liza Minnelli, winner of four Tony Awards, an Oscar, a special "Legends" Grammy, two Golden Globe Awards and an Emmy, is one of the entertainment world\'s consummate performers. In film, on stage and in television, Liza has won critical acclaim, a multitude of fans, and recognition from her peers in show business, giving new dimension and credibility to the word “superstar.”';
		$ce->start 		 = '2015-11-28 20:00:00';
		$ce->price 		 = 150;
		$ce->location_id = 8;
		$ce->user_id	 = 1;
		$ce->img_url 	 = 'liza.jpg';
		$ce->save();


		// TYCOON FLATS
		// Tom Young
		$ce = new CalendarEvent();
		$ce->title 		 = 'Tom Young';
		$ce->description = '"We play both kinds of music: country and western."';
		$ce->start 		 = '2015-09-17 19:00:00';
		$ce->price 		 = 5;
		$ce->location_id = 9;
		$ce->user_id	 = 1;
		$ce->save();

		// Tom Young
		$ce = new CalendarEvent();
		$ce->title 		 = 'Tom Young';
		$ce->description = '"We play both kinds of music: country and western."';
		$ce->start 		 = '2015-09-24 19:00:00';
		$ce->price 		 = 5;
		$ce->location_id = 9;
		$ce->user_id	 = 1;
		$ce->save();

		// Tom Young
		$ce = new CalendarEvent();
		$ce->title 		 = 'Tom Young';
		$ce->description = '"We play both kinds of music: country and western."';
		$ce->start 		 = '2015-10-01 19:00:00';
		$ce->price 		 = 5;
		$ce->location_id = 9;
		$ce->user_id	 = 1;
		$ce->save();

		// Tom Young
		$ce = new CalendarEvent();
		$ce->title 		 = 'Tom Young';
		$ce->description = '"We play both kinds of music: country and western."';
		$ce->start 		 = '2015-10-08 19:00:00';
		$ce->price 		 = 5;
		$ce->location_id = 9;
		$ce->user_id	 = 1;
		$ce->save();

		// Tom Young
		$ce = new CalendarEvent();
		$ce->title 		 = 'Tom Young';
		$ce->description = '"We play both kinds of music: country and western."';
		$ce->start 		 = '2015-10-15 19:00:00';
		$ce->price 		 = 5;
		$ce->location_id = 9;
		$ce->user_id	 = 1;
		$ce->save();
	}

}
