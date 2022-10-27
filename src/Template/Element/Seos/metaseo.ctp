<?php
$sitetitle = $configs['nomesite'];
use Cake\Routing\Router;
?>
<title><?php if (!empty($seo['meta_titulo'])) { echo h($seo['meta_titulo']) ." | ". $sitetitle; } else { echo $sitetitle; } ?></title>
<link rel="manifest" href="/manifest.json">
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name="theme-color" content="#fd001a">
<meta name="apple-mobile-web-app-status-bar-style" content="#fd001a">
<meta name="msapplication-navbutton-color" content="#fd001a">
<link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon"/>
<meta name="author" content="<?php echo h($sitetitle) ?>"/>
<meta name="web_author" content="Winsite Agência Web | Umuarama - PR (44) 3056 - 1499">
<meta name="robots" content="index,follow"/>
<meta property="og:locale" content="pt_br">
<meta name="copyright" content="© <?php echo date('Y'); ?> - <?php echo h($sitetitle) ?>"/>

<?php if (!empty($seo['meta_description'])) { ?><meta name="description" content="<?php echo $seo['meta_description']; ?>"><?php } ?>
<?php if (!empty($seo['meta_keywords'])) { ?><meta name="keywords" content="<?php echo $seo['meta_keywords']; ?>"><?php } ?>

<meta property="og:title" content="<?php if (!empty($seo['meta_titulo'])) { echo h($seo['meta_titulo']) ." | ". $sitetitle; } else { echo $sitetitle; } ?>">
<?php if (!empty($seo['meta_description'])) { ?><meta property="og:description" content="<?php echo $seo['meta_description']; ?>"><?php } ?>
<meta property="og:site_name" content="<?php echo h($sitetitle) ?>">
<?php if (!empty($seo['meta_link'])) { ?><meta property="og:url" content="<?php echo $seo['meta_link']; ?>"><?php } ?>
<?php if (!empty($seo['meta_image'])) { ?><meta property="og:image" content="<?php echo $seo['meta_image']; ?>"><?php } ?>
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="657">
<meta property="og:image:alt" content="<?php if (!empty($seo['meta_titulo'])) { echo h($seo['meta_titulo']) ." | ". $sitetitle; } else { echo $sitetitle; } ?>">
<script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "BlogPosting",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?php echo $seo['meta_link']; ?>"
        },
        "url": "<?php echo $seo['meta_link']; ?>",
        "headline": "<?php echo $seo['meta_titulo']; ?>",
        "publisher": {
            "@type": "Organization",
            "@id": "<?php echo $seo['meta_link']; ?>",
            "name": "<?php echo h((!empty($seo['meta_titulo'])) ? $seo['meta_titulo'] : $sitetitle); ?>",
            "logo": {
                "@type": "ImageObject",
                "url": "/imagem/logo.png",
                "width": 290,
                "height": 100
            }
        },
        "image": {
            "@type": "ImageObject",
            "url": "<?php echo $seo['meta_image']; ?>",
            "width": 1920,
            "height": 1080
        },
        "articleSection": "SEO",
        "keywords": "<?php echo $seo['meta_keywords'] ?>",
        "description": "<?php echo $seo['meta_description']; ?>",
        "video": [
            null,
            null,
            null
        ],
        "audio": [
            null,
            null,
            null
        ],
        "commentCount": "0"
    }
</script>
