# orryb.com

Static site hosted on Netlify. Everything under `public/` is deployed as-is (see `netlify.toml`).

```
public/            served files
  index.html       homepage
  resume/          /resume
  assets/          css, js, fonts, img for the homepage
  2011/            old 2011 site
  projects/        old side projects, served at /projects/<name>
src/less/          LESS sources for public/assets/css
```

## Editing styles

The compiled CSS is committed. After editing LESS, recompile:

```sh
npx lessc src/less/style.less     public/assets/css/main.css
npx lessc src/less/bootstrap.less public/assets/css/bootstrap.css
```

## Local preview

```sh
npx serve public
```
