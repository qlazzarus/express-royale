import {Dispatch, Middleware, MiddlewareAPI} from 'redux';

import {AppendAlertAction, CombinedAction} from "@/actions";
import {ActionType} from "@/enums";

export default (): Middleware<{}, any, Dispatch<CombinedAction>> =>
    ({}: MiddlewareAPI<Dispatch<CombinedAction>, any>) =>
        (next: Dispatch<CombinedAction>) =>
            (action: CombinedAction) => {
                const {type} = action;

                if (type !== ActionType.APPEND_ALERT) {
                    return next(action);
                }

                const {id, expiredIn, ...rest} = <AppendAlertAction>action;
                setTimeout(
                    () => next({...rest, id, type: ActionType.REMOVE_ALERT}),
                    expiredIn
                );

                return next(action);
            }
