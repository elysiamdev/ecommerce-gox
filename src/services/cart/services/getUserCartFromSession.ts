const getUserCartFromSession = (session: any) => {
    return session.user_cart? session.user_cart : { items: [] }
}

export { getUserCartFromSession }