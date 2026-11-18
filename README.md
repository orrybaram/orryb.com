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

Easter egg: press **X** to switch the whole page to an old CRT monitor showing an x-ray: the page's own
source and the sticker's and links' element boxes. The `#xray` canvas draws the code and boxes; the shader takes it
as a texture (`uXrayTex`) and does the film tint, slightly curved glass, scanlines, phosphor stripes and the power on/off
(`uXray`). Without WebGL the canvas is shown as is, with its own scanlines. The console hints at it, and so does the
back of the sticker: pull the top-right corner all the way over to the left for a small ballpoint doodle along the bottom edge, near the fold (an X key → `</>`).

## 2012 homepage

Plain files, no build step. `css/editor.css` styles the editor page (the slice of Bootstrap 2 it
used, the Monokai CodeMirror theme, and the page styles); `css/preview.css` is loaded into the
preview iframe for the sticker markup and its Font Awesome icons.

## Local preview

```sh
npx serve public
```
