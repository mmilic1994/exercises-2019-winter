# React boilerplate

a.k.a getting ready for development with React without the `create-react-app` command.

---

## Install modules

Start by running

```shell
npm install
```

or

```shell
yarn install
```

---

## Starting development

To start the server, watch the files and bundle them with webpack for development:

```shell
npm run watch
```

The URL on which the app is going to be served will be shown in the console output.

---

## Using livereload

If you are utilizing some other server (e.g. some kind of *X*AMP package) and you want livereload, add the following code to the `<head>` of your document:

```html
<script src="http://localhost:35729/livereload.js"></script>
```

The exact port to use in the URL (e.g. `35729`) can be found in the console after starting the watcher.

---

## Bundling for production

To bundle for production use:

```shell
npm run prod
```