<?php



$imSettings['blog'] = array(	'description' => '',
	'keywords' => '',
	'root' => 'http://blog/',
	'home_posts_number' => 15,
	'card_type' => 'topcoverbottomcontents',
	'show_card_title' => true,
	'show_card_category' => true,
	'show_card_description' => true,
	'show_card_author' => true,
	'show_card_date' => true,
	'show_card_button' => true,
	'article_type' => 'titlecovercontents',
	'file_prefix' => 'x5_',
	'comments_source' => 'wsx5',
	'email' => '',
	'moderate' => false,
	'sendmode' => 'db',
	'dbid' => '',
	'dbtable' => '',
	'comment_type' => 'both',
	'comments_order' => 'asc',
	'comments_on_multiple_columns' => true,
	'abuse' => false,
	'captcha' => false,
	'highlight_mode' => 'none',
	'categories' => Array('Welcome Greeting'),
	'posts' => Array(),
	'posts_cat' => Array(),
	'posts_author' => Array(),
	'posts_month' => Array(),
	'posts_slug' => Array()
)
;

// Post titled "Welcome to Fil-Am Crestview"
$imSettings['blog']['posts']['00000000B'] = array(
	'id' => '00000000B',
	'rel_url' => '?welcome-to-fil-am-crestview',
	'title' => 'Welcome to Fil-Am Crestview',
	'tag_title' => 'Welcome to Fil-Am Crestview - filam-crestview',
	'title_heading_tag' => 'h2',
	'slug' => 'welcome-to-fil-am-crestview',
	'author' => 'www.maccyberpro.xyz',
	'category' => 'Welcome Greeting',
	'cardCover' => 'blog/files/CRESTVIEWFILAMBLOG_thumb.png',
	'cover' => 'blog/files/CRESTVIEWFILAMBLOG.png',
	'summary' => '',
	'tag_description' => '',
	'body' => "<div id=\"imBlogPost_00000000B\"><div><span class=\"fs18lh1-5 ff1\"><b>🌟 Welcome to the Filipino-American Association of Crestview! 🌟</b></span></div><div><br></div><div><span class=\"fs14lh1-5 ff1\">We are delighted to extend a warm welcome to each and every one of you visiting our website. Whether you are a member of our vibrant community, a newcomer to Crestview, or simply curious about Filipino-American culture, we are thrilled to have you here.</span></div><div><span class=\"fs14lh1-5 ff1\"><br></span></div><div><span class=\"fs14lh1-5 ff1\">At the Filipino-American Association of Crestview, we are dedicated to celebrating and promoting Filipino heritage while fostering unity among our members. Through cultural events, community outreach, and shared experiences, we aim to create lasting connections and preserve our rich traditions.</span></div><div><span class=\"fs14lh1-5 ff1\"><br></span></div><div><span class=\"fs14lh1-5 ff1\">Explore our website to discover upcoming events, learn about our history, and find opportunities to get involved. Whether you're interested in cultural performances, community service, or simply connecting with fellow Filipino-Americans in Crestview, there's something here for you.</span></div><div><span class=\"fs14lh1-5 ff1\"><br></span></div><div><span class=\"fs14lh1-5 ff1\">Thank you for visiting, and we look forward to connecting with you and sharing the spirit of camaraderie that defines our association.</span></div><div><span class=\"fs14lh1-5 ff1\"><br></span></div><div><span class=\"fs14lh1-5 ff1\">Mabuhay and welcome to the Filipino-American Association of Crestview!</span></div><div><span class=\"fs14lh1-5 ff1\"><br></span></div><div><span class=\"fs14lh1-5 ff1\">Warm regards,</span></div><div><span class=\"fs14lh1-5 ff1\"><br></span></div><div><span class=\"fs14lh1-5 ff1\">Christopher Macabugao</span></div><div><span class=\"fs14lh1-5 ff1\">Web Creator</span></div><div><span class=\"fs14lh1-5 ff1\">www.maccyberpro.xyz</span></div><div style=\"clear: both;\"><!-- clear floated images --></div></div>",
	'rich_data_type' => array(
		array(
			'@type' => 'BlogPosting',
			'@context' => 'https://schema.org',
			'publisher' => array(
				'@type' => 'Organization',
				'name' => ''
			),
			'datePublished' => '2024-06-25T01:05:00',
			'dateModified' => '2024-06-25T01:05:00',
			'author' => array(
				'@type' => 'Person',
				'name' => 'www.maccyberpro.xyz'
			),
			'headline' => 'Welcome to Fil-Am Crestview',
			'description' => '',
			'mainEntityOfPage' => 'http://127.0.0.1:8080/blog/?welcome-to-fil-am-crestview',
			'image' => 'http://127.0.0.1:8080/blog\\files\\CRESTVIEWFILAMBLOG.png',
			'speakable' => array(
				'@type' => 'SpeakableSpecification',
				'xpath' => array(
					'/html/head/meta[@name=\'title\']/@content',
					'/html/head/meta[@name=\'description\']/@content'
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => '',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Jun 2024',
					'item' => 'http://127.0.0.1:8080/blog/?month=202406',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Welcome to Fil-Am Crestview',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => '',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Welcome Greeting',
					'item' => 'http://127.0.0.1:8080/blog/?category=Welcome Greeting',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Welcome to Fil-Am Crestview',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => '',
					'item' => 'http://127.0.0.1:8080/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'www.maccyberpro.xyz',
					'item' => 'http://127.0.0.1:8080/blog/?author=www.maccyberpro.xyz',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Welcome to Fil-Am Crestview',
					'position' => 3
				)
			)
		)
	),
	'keywords' => '',
	'timestamp' => '24 Jun 2024',
	'timestampExt' => 'Monday 24 Jun 2024',
	'utc_time' => 1719277500,
	'month' => '202406',
	'comments' => false,
	'sources' => array(),
	'tag' => array(),
	'opengraph' => array(
		'url' => 'http://127.0.0.1:8080/blog/?welcome-to-fil-am-crestview',
		'type' => 'article',
		'title' => 'Welcome to Fil-Am Crestview',
		'description' => '',
		'keywords' => '',
		'updated_time' => '1719281100',
		'images' => array('http://127.0.0.1:8080/blog/files/CRESTVIEWFILAMBLOG_og.png','http://127.0.0.1:8080/blog/files/CRESTVIEWFILAMBLOG_og_small.png')
	)
);$imSettings['blog']['posts_slug']['welcome-to-fil-am-crestview'] = '00000000B';
$imSettings['blog']['posts_cat'] = array(
	'Welcome Greeting' => array(
		'00000000B'
	)
);
$imSettings['blog']['posts_author'] = array(
	'www.maccyberpro.xyz' => array(
		'00000000B'
	)
);
$imSettings['blog']['posts_month'] = array(
	'202406' => array(
		'00000000B'
	)
);
$imSettings['blog']['posts_tag'] = array();

// End of file blog.inc.php