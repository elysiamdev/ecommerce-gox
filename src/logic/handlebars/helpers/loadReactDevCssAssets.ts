const loadReactDevCssAssets = function (this: any, context: any, options: any) {
    if(process.env.NODE_ENV === 'production') {
        return context.fn(this)
    }
    else {
        return ``
    }
}

export { loadReactDevCssAssets }