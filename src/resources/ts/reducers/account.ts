export interface AccountState {
    token: string
}

const initialState: AccountState = {
    token: '',
}

export default (state = initialState, action: any): AccountState => {
    switch (action.type) {
        default:
            return state;
    }
}
