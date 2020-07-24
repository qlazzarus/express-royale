import React, { FC } from 'react';
import { useObserver } from '@/hooks';

export default () => {
    const message = useObserver('app', 'message');

    /*
  <div class="fixed top-0 right-0 m-6">
    <div
      class="bg-red-200 text-red-900 rounded-lg shadow-md p-6 pr-10"
      style="min-width: 240px"
    >
      <button
        class="opacity-75 cursor-pointer absolute top-0 right-0 py-2 px-3 hover:opacity-100"
      >
        ×
      </button>
      <div class="flex items-center">
        Oops! Something terrible happened...
      </div>
    </div>
  </div>    
    */
    
    return message && (
        <div className={'fixed top-5 left-0 my-6 z-50 w-full'} role={"alert"}>
            <div className={"bg-red-200 text-red-900 rounded-lg shadow-md p-4 px-6 mx-auto w-full md:w-1/2"}>
                {message}
            </div>
        </div>
    );
}