![Larvel Static File Blog](https://banners.beyondco.de/Laravel%20Static%20File%20Blog.png?theme=dark&packageManager=&packageName=&pattern=xEquals&style=style_1&description=Static+File+Blog+driven+by+Markdown+Files&md=1&showWatermark=0&fontSize=125px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)

## Table of Contents
- [Overview](#overview)
- [Installation](#installation)
- [Examples Markdown File](#-examples-markdown-file)
- [Useful Links](#-useful-links)

---

## 🔎 Overview
This is a static file Blog written in Laravel. It's driven by markdown files (no database required).
The blog will feature things like syntax highlighting, post tagging and pagination. Plus, it'll render in record time.

You can quickly create new posts since there's no need for an admin panel.

## ⚙️ Installation

1. Clone this repository:
    ```bash
    git clone git@github.com:Aczeko/laravel-static-file-blog.git
    ```
2. Navigate into the directory:
    ```bash
    cd yourproject
    ````

3. Install dependencies:
    ```bash
    npm install
    composer install 
    ```

4. Duplicate the .env.example file and save it as .env
    - here you can give your blog a name at APP_NAME=""

    ```
    APP_NAME="Your Blog's Name" 
    ```

5. Generate a new Application Key:

    ```bash
    php artisan key:generate
    ```

6. Run your build process with:

    ```bash
    npm run dev.
    ```

## 📋 Examples Markdown File
Now all your blog needs is a blog post, so here is how you can make them and where you should save them:

1. Open your project and go to `storage/app/posts/`. You can save all your blog posts in here.
2. The Markdown files have to follow this name convention:

    ```
    yyyy-mm-dd.blog-post-name.md
    
    Example:
    2024-05-30.markdown-introduction.md
    ```
3. All your markdown files have to include a title, an author, a teaser and tags at the beginning of each file and it should be put into the structure shown below.

   You can copy this, change it to match your blog post and use it for your Markdown files:

    ```
    ---

    title: Blog Post Name

    author: Your Name

    teaser: This is a simple teaser for your blog post. It should give a brief overview and encourage readers to click through and read the full post.

    tags: [Tag1, Tag2]

    ---
    
    ## Put in your own Markdown syntax here...
    ```


## 🔗 Useful Links
- [Video-Tutorial for this static file blog](https://codecourse.com/courses/build-a-static-file-blog-with-laravel)
- [Installing Tailwind CSS for Laravel](https://tailwindcss.com/docs/guides/laravel)
- [Tailwinds Typography Plugin](https://github.com/tailwindlabs/tailwindcss-typography)
