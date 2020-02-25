const loadReactDevJsAssets = function (this: any, context: any, options: any) {
    if(process.env.NODE_ENV === 'production') {
        return context.fn(this)
    }
    else {
        return `<script src="http://localhost:3000/static/js/bundle.js"></script>
        <script src="http://localhost:3000/static/js/0.chunk.js"></script>
        <script src="http://localhost:3000/static/js/1.chunk.js"></script>
        <script src="http://localhost:3000/static/js/main.chunk.js"></script>`
    }
}

export { loadReactDevJsAssets }