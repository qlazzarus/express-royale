import React from 'react';
import {useObserver, useStore} from '@/hooks';

export default () => {
    const app = useStore('app');
    const flash: FlashMessageProps = useObserver('app.flash');

    return flash && (
        <div className={'fixed top-5 left-0 my-6 z-50 w-full'} role={"alert"}>
            <div className={"bg-red-200 text-red-900 relative rounded-lg shadow-md p-4 px-6 mx-auto w-full md:w-1/2"}>
                <span>{flash.message}</span>
                <span
                    className={"absolute top-0 bottom-0 right-0 px-4 py-3"}
                    onClick={() => app.closeFlash()}
                >
                    <svg
                        className={"fill-current h-6 w-6 text-red-500"}
                        role={"button"}
                        xmlns={"http://www.w3.org/2000/svg"}
                        viewBox={"0 0 20 20"}
                    >
                        <title>Close</title>
                        <path d={"M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"}/>
                    </svg>
                </span>
            </div>
        </div>
    );
}
