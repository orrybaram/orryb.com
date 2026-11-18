# orryb.com

Static site hosted on Netlify. Everything under `public/` is deployed as-is (see `netlify.toml`).

```
public/            served files
  index.html       homepage: the "Hello my name is" sticker on a sweatshirt (one self-contained file)
  resume/          /resume
  assets/          css, js, fonts, img for the 2012 homepage
  2012/            previous homepage (2012, live code editor)
  2011/            old 2011 site
  projects/        old side projects, served at /projects/<name>
src/less/          LESS sources for public/assets/css
```

## Homepage

`public/index.html` is a single file with no build step: a WebGL shader draws the sweatshirt,
the stitched ghost and icons, and the sticker. The sticker and the links are real HTML inside
`<canvas layoutsubtree>`; where the browser supports HTML-in-Canvas (`texElementImage2D`, behind
`chrome://flags/#canvas-draw-element` for now) they are textured straight from that HTML,
otherwise the same layout is drawn with Canvas 2D. The handwriting and the ghost are embedded
as data URIs. To see which path is running, remove `hidden` from `#badge`.

## Editing styles (2012 homepage)

The compiled CSS is committed. After editing LESS, recompile:

```sh
npx lessc src/less/style.less     public/assets/css/main.css
npx lessc src/less/bootstrap.less public/assets/css/bootstrap.css
```

## Local preview

```sh
npx serve public
```
