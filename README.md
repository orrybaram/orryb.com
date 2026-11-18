# orryb.com

Static site hosted on Netlify. Everything under `public/` is deployed as-is (see `netlify.toml`).

```
public/            served files
  index.html       homepage: the "Hello my name is" sticker on a sweatshirt (one self-contained file)
  resume/          /resume
  2012/            previous homepage (2012, live code editor), with its own css/js/img/fonts
  2011/            old 2011 site
  projects/        old side projects, served at /projects/<name>
```

## Homepage

`public/index.html` is a single file with no build step: a WebGL shader draws the sweatshirt,
the stitched ghost and icons, and the sticker. The sticker and the links are real HTML inside
`<canvas layoutsubtree>`; where the browser supports HTML-in-Canvas (`texElementImage2D`, behind
`chrome://flags/#canvas-draw-element` for now) they are textured straight from that HTML,
otherwise the same layout is drawn with Canvas 2D. The handwriting and the ghost are embedded
as data URIs. To see which path is running, remove `hidden` from `#badge`.

Easter egg: press **X** (mouse and keyboard only) for an x-ray lens that follows the cursor and shows the
page's own source and the sticker's and links' element boxes. The shader tints the film (`uXray`); the `#xray` canvas
draws the code and boxes. The console hints at it.

## 2012 homepage

Plain files, no build step. `css/editor.css` styles the editor page (the slice of Bootstrap 2 it
used, the Monokai CodeMirror theme, and the page styles); `css/preview.css` is loaded into the
preview iframe for the sticker markup and its Font Awesome icons.

## Local preview

```sh
npx serve public
```
