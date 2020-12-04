import { ActionType } from "@/enums";

const initialState = {
    loading: false
}

export default (state = initialState, action: any) => {
    switch (action.type) {
        case ActionType.INITIALIZE:
            return { ...state, loading: true };
        default:
            return state;
    }
}