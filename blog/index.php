<?php require_once("../res/x5engine.php"); ?>
<?php
$blog = new imBlog();
$data = $blog->parseUrlArray(@$_GET);
if (!$data['valid']) {
	header('Location: index.php', true, 302);
}
?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="en-GB" dir="ltr">
	<head>
		<title><?php echo $blog->pageTitle('filam-crestview', ' - '); ?></title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="MACSys" />
		<meta name="generator" content="Incomedia WebSite X5 Pro 2024.2.4 - www.websitex5.com" />
		<meta name="description" content="<?php echo $blog->pageDescription(); ?>" />
		<meta name="keywords" content="<?php echo $blog->pageKeywords(); ?>" />
		<meta property="og:locale" content="en" />
<?php if (isset($data['id'])) { echo $blog->getOpengraphTags($data['id'], "\t\t"); } ?>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="../style/reset.css?2024-2-4-0" media="screen,print" />
		<link rel="stylesheet" href="../style/print.css?2024-2-4-0" media="print" />
		<link rel="stylesheet" href="../style/style.css?2024-2-4-0" media="screen,print" />
		<link rel="stylesheet" href="../style/template.css?2024-2-4-0" media="screen" />
		
		<link rel="stylesheet" href="../pluginAppObj/imFooter_pluginAppObj_03/custom.css" media="screen, print" />
		<link rel="stylesheet" href="../blog/style.css?2024-2-4-0-638549140700012812" media="screen,print" />
		<script src="../res/jquery.js?2024-2-4-0"></script>
		<script src="../res/x5engine.js?2024-2-4-0" data-files-version="2024-2-4-0"></script>
		
		<script src="../pluginAppObj/imFooter_pluginAppObj_03/main.js"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('Your browser does not support the features necessary to display this website.','Your browser may not support the features necessary to display this website.','[1]Update your browser[/1] or [2]continue without updating[/2].','http://outdatedbrowser.com/'); };
			x5engine.settings.currentPath = '../';
			x5engine.utils.currentPagePath = 'blog/index.php';
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		<link rel="alternate" type="application/rss+xml" title="" href="../blog/x5feed.php" />
<?php
$blogBaseUrl = $imSettings['general']['url'] . 'blog/';
$urlData = $blog->parseUrlArray(@$_GET);
$numPosts = $blog->getPostsCount();
$pagStart = array_key_exists("start", $urlData) ? $urlData['start'] : 0;
$pagLength = $imSettings['blog']['home_posts_number'];
$isPostPage = false;
if (array_key_exists('slug', $urlData)) {
	$isPostPage = true;
	$href = $blogBaseUrl . '?' . $urlData['slug'];
}
else if (array_key_exists('id', $urlData)) {
	$isPostPage = true;
	$href = $blogBaseUrl . $blog->getSlugUrl($urlData['id']);
}
else if (array_key_exists('category', $urlData)) {
	$category = $blog->getUnescapedCategory($urlData['category']);
	if ($category !== NULL) {
		$href = $blogBaseUrl . '?category=' . urlencode(str_replace(' ', '_', $category));
	}
}
else if (array_key_exists('author', $urlData)) {
	$author = $blog->getUnescapedAuthor($urlData['author']);
	if ($author !== NULL) {
		$href = $blogBaseUrl . '?author=' . urlencode(str_replace(' ', '_', $author));
	}
}
else if (array_key_exists('tag', $urlData)) {
	$href = $blogBaseUrl . '?tag=' . urlencode($urlData['tag']);
}
else if (array_key_exists('month', $urlData)) {
	$href = $blogBaseUrl . '?month=' . urlencode($urlData['month']);
}
else {
	$href = $blogBaseUrl;
}
if ($isPostPage || $pagStart == 0) {
	echo '<link rel="canonical" href="'. $href. '"/>' . PHP_EOL;
}
if (!$isPostPage && $numPosts > $pagLength) {
	if ($pagStart - $pagLength >= 0) {
		$prev = 'start=' . ($pagStart - $pagLength) . '&length=' . $pagLength;
		$prev = ($href == $blogBaseUrl) ? '?' . $prev : '&' . $prev;
		echo '<link rel="prev" href="' . $href . $prev . '"/>' . PHP_EOL;
	}
	if ($pagStart + $pagLength < $numPosts) {
		$next = 'start=' . ($pagStart + $pagLength) . '&length=' . $pagLength;
		$next = ($href == $blogBaseUrl) ? '?' . $next : '&' . $next;
		echo '<link rel="next" href="' . $href . $next . '"/>' . PHP_EOL;
	}
}
$rich_data_string = $blog->getRichDataType();
if (!is_null($rich_data_string)) {
	echo '		<script type="application/ld+json">
' . $rich_data_string . '
		</script>
';
}
?>
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<header id="imHeader">
						<h1 class="imHidden"><?php echo $blog->pageHeaderTitle('filam-crestview', ' - '); ?></h1>
						<div id="imHeaderObjects"><div id="imHeader_imMenuObject_01_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imHeader_imMenuObject_01"><div id="imHeader_imMenuObject_01_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class="imMnMnFirst imPage" data-link-paths=",/index.html,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../index.html">
Home Page		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/who-we-are.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../who-we-are.html">
Who we are		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imLevel"><div class="label-wrapper"><div class="label-inner-wrapper"><span class="label">Stay Updated</span></div></div><ul data-original-position="open-bottom" class="open-bottom" style="" >
	<li class="imMnMnFirst imLevel" data-link-paths=",/blog/index.php,/blog/" data-link-hash="-1004162301"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="../blog/index.php" class="label" onclick="return x5engine.utils.location('../blog/index.php', null, false)">Articles</a></div></div></li><li class="imMnMnMiddle imPage" data-link-paths=",/business-directory.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../business-directory.html">
Business Directory		</a>
</div>
</div>
	</li><li class="imMnMnLast imLevel" data-link-paths=",/index.html,/" data-link-anchor="Events" data-link-hash="217778995"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="../index.html#Events" class="label" onclick="return x5engine.utils.location('../index.html#Events', null, false)">Events</a></div></div></li></ul></li><li class="imMnMnLast imPage" data-link-paths=",/contact.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../contact.html">
Contact		</a>
</div>
</div>
	</li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imHeader_imMenuObject_01_settings = {
	'menuId': 'imHeader_imMenuObject_01',
	'responsiveMenuEffect': 'slide',
	'responsiveMenuLevelOpenEvent': 'mouseover',
	'animationDuration': 1000,
}
x5engine.boot.push(function(){x5engine.initMenu(imHeader_imMenuObject_01_settings)});
$(function () {$('#imHeader_imMenuObject_01_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0;    $this.on('mouseenter', function () {        if($(this).parents('#imHeader_imMenuObject_01_container-menu-opened').length > 0) return;         clearTimeout(timeout);        setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeIn(); }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imHeader_imMenuObject_01_container-menu-opened').length > 0) return;         timeout = setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeOut(); }, 250);    });});});

</script>
</div><div id="imHeader_imObjectImage_02_wrapper" class="template-object-wrapper"><div id="imHeader_imObjectImage_02"><div id="imHeader_imObjectImage_02_container"><a href="../index.html" onclick="return x5engine.utils.location('../index.html', null, false)"><img src="../images/filam-crestview-logo.png" title="" alt="" width="89" height="89" />
</a></div></div></div><div id="imHeader_imTextObject_04_wrapper" class="template-object-wrapper"><div id="imHeader_imTextObject_04">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imHeader_imTextObject_04_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div data-line-height="1.15" class="lh1-15"><span style="font-weight: 700;" class="fs22lh1-15">Fil-Am Crestview</span></div>
		</div>
	</div>

</div>
</div><div id="imHeader_imTextObject_05_wrapper" class="template-object-wrapper"><div id="imHeader_imTextObject_05">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imHeader_imTextObject_05_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div data-line-height="1" class="lh1">Filipino-American Association of Crestview</div>
		</div>
	</div>

</div>
</div></div>
					</header>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"></div>
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Skip the main menu">Go to content</a>
					<div id="imSideBar">
						<div id="imSideBarObjects"></div>
					</div>
					<div id="imContentGraphics"></div>
					<main id="imContent">
						<a id="imGoToCont"></a>
						<div id="imBlogPage" class="<?php echo (isset($data['id']) ? 'imBlogArticle' : 'imBlogHome'); ?>"><<?php echo (isset($data['id']) ? 'article' : 'div'); ?> id="imBlogContent"><?php
						$blog->setCommentsPerPage(10);
						if(isset($data['id']))
							$blog->showPost($data['id'],1);
						else if(isset($data['category']))
							$blog->showCategory($data['category']);
						else if(isset($data['author']))
							$blog->showAuthor($data['author']);
						else if(isset($data['tag']))
							$blog->showTag($data['tag']);
						else if(isset($data['month']))
							$blog->showMonth($data['month']);
						else if(isset($data['search']))
							$blog->showSearch($data['search']);
						else
							$blog->showLast(15);
						?>
						</<?php echo (isset($data['id']) ? 'article' : 'div'); ?>>
						<aside id="imBlogSidebar">
							<div class="imBlogBlock" id="imBlogBlock0">
								<div>
									<div class="imBlogBlockTitle">Todays Highlights</div>
						<?php $blog->showBlockCategories(4) ?>
								</div>
							</div>
							<div class="imBlogBlock" id="imBlogBlock1">
								<div>
									<div class="imBlogBlockTitle">Recent Posts</div>
						<?php $blog->showBlockLast(4) ?>
								</div>
							</div>
							<div class="imBlogBlock" id="imBlogBlock2">
								<div>
									<div class="imBlogBlockTitle">Monthly Posts</div>
						<?php $blog->showBlockMonths(4) ?>
								</div>
							</div>
							<div class="imBlogBlock" id="imBlogBlock3">
								<div>
									<div class="imBlogBlockTitle">Latest News</div>
									<iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fgroups%2FFilAmCrestview&amp;width=140&amp;colorscheme=light&amp;show_faces=false&amp;stream=false&amp;header=true&amp;height=250" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:140px; height:250px;" allowTransparency="true"></iframe>
								</div>
							</div>
						</aside>
						<script>
							x5engine.boot.push(function () { 
								x5engine.blogSidebarScroll({ enabledBreakpoints: ['ea2f0ee4d5cbb25e1ee6c7c4378fee7b', 'd2f9bff7f63c0d6b7c7d55510409c19b', '72e5146e7d399bc2f8a12127e43469f1'] });
								var postHeightAtDesktop = 300,
									postWidthAtDesktop = 970;
								if ($('#imBlogPage').hasClass('imBlogArticle')) {
									var coverResizeTo = null,
										coverWidth = 0;
									x5engine.utils.onElementResize($('.imBlogPostCover')[0], function (rect, target) {
										if (coverWidth == rect.width) {
											return;
										}
										coverWidth = rect.width;
										if (!!coverResizeTo) {
											clearTimeout(coverResizeTo);
										}
										coverResizeTo = setTimeout(function() {
											$('.imBlogPostCover').height(postHeightAtDesktop * coverWidth / postWidthAtDesktop + 'px');
										}, 50);
									});
								}
							});
						</script>
						</div>
					</main>
					<footer id="imFooter">
						<div id="imFooterObjects"><div id="imFooter_pluginAppObj_03_wrapper" class="template-object-wrapper"><!-- Social Icons v.17 --><div id="imFooter_pluginAppObj_03">
            <div id="soc_imFooter_pluginAppObj_03">
                <div class="wrapper horizontal flat shrink">
                	<div class='social-icon flat'><a href='https://www.facebook.com/groups/FilAmCrestview' target='_blank'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M57,93V54H70.14l2-15H57V29.09c0-4.39.94-7.39,7.24-7.39H72V8.14a98.29,98.29,0,0,0-11.6-.6C48.82,7.54,41,14.61,41,27.59V39H27V54H41V93H57Z"/></svg><span class='fallbacktext'>Fb</span></a></div>
                </div>

            </div>
                <script>
                    socialicons_imFooter_pluginAppObj_03();
                </script>
        </div></div><div id="imFooter_imTextObject_04_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_04">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_04_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div><span class="fs11lh1-5">Created by: </span><span class="fs12lh1-5 ff1">www.maccyberpro.xyz</span></div>
		</div>
	</div>

</div>
</div><div id="imFooter_imObjectImage_05_wrapper" class="template-object-wrapper"><div id="imFooter_imObjectImage_05"><div id="imFooter_imObjectImage_05_container"><img src="../images/filam-crestview-logo_go98krzg.png" title="" alt="" width="121" height="121" />
</div></div></div><div id="imFooter_imTextObject_06_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_06">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_06_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div data-line-height="1.15" class="lh1-15"><span class="fs22lh1-15 cf1"><b>Fil-Am Crestview</b></span></div>
		</div>
	</div>

</div>
</div></div>
					</footer>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Read this page again">Back to content</a></span>
			</div>
		</div>
		
		<noscript class="imNoScript"><div class="alert alert-red">To use this website you must enable JavaScript.</div></noscript>
	</body>
</html>
