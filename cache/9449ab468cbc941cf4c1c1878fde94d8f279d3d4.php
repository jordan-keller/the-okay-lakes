<?php $__env->startSection('content'); ?><p>This is a starter template for creating a beautiful, customizable blog with minimal effort. You’ll only have to change a few settings and you’re ready to go.<!-- more -->
<br>
<br></p>

<h2>Configuration</h2>

<p>As with all Jigsaw sites, configuration settings can be found in <code>config.php</code>; you can update the variables in that file with settings specific to your site. You can also add new configuration variables there to use across your site; take a look at the <a href="http://jigsaw.tighten.co/docs/site-variables/">Jigsaw documentation</a> to learn more.</p>

<pre><code class="language-php">// config.php
return [
    'baseUrl' =&gt; 'https://my-awesome-jigsaw-site.com/',
    'production' =&gt; false,
    'siteName' =&gt; 'My Site',
    'siteDescription' =&gt; 'Give your blog a boost with Jigsaw.',
    ...
];
</code></pre>

<blockquote>
  <p>Tip: This configuration file is also where you’ll define any "collections" (for example, a collection of the contributors to your site, or a collection of blog posts organized by topic). Check out the official <a href="https://jigsaw.tighten.co/docs/collections/">Jigsaw documentation</a> to learn more.</p>
</blockquote>

<hr />

<h3>Adding Content</h3>

<p>You can write your content using a <a href="http://jigsaw.tighten.co/docs/content-other-file-types/">variety of file types</a>. By default, this starter template expects your content to be located in the <code>source/_posts/</code> folder.</p>

<p>The top of each content page contains a YAML header that specifies how it should be rendered. The <code>title</code> attribute is used to dynamically generate HTML <code>title</code> and OpenGraph tags for each page. The <code>extends</code> attribute defines which parent Blade layout this content file will render with (e.g. <code>_layouts.post</code> will render with <code>source/_layouts/post.blade.php</code>), and the <code>section</code> attribute defines the Blade "section" that expects this content to be placed into it.</p>

<pre><code class="language-yaml">---
extends: _layouts.post
section: content
title: Getting Started
date: 2022-08-02
description: Getting started with the Jigsaw blog starter template
cover_image: /assets/img/post-cover-image-2.png
featured: true
---
</code></pre>

<h3>Adding Assets</h3>

<p>Any assets that need to be compiled, such as JavaScript or CSS using Tailwind, can be added to the <code>source/_assets/</code> directory. Vite will process them when running <code>npm run dev</code> or <code>npm run build</code>, and the processed assets will be stored in <code>/build_local</code> or <code>/build_production</code>, respectively.</p>

<p>Files that don't require processing (such as images and fonts) can be added directly to <code>/source/assets/</code>.</p>

<p><a href="http://jigsaw.tighten.co/docs/compiling-assets/">Read more about compiling assets in Jigsaw using Vite.</a></p>

<hr />

<h2 id="getting-started-building-your-site">Building Your Site</h2>

<p>Now that you’ve edited your configuration variables and know how to customize your styles and content, let’s build the site.</p>

<pre><code class="language-bash"># run development server
npm run dev

# build static files with Vite
npm run build
</code></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>