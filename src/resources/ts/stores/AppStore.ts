import { action, configure, observable, reaction } from "mobx";
import uuid from 'uuid-random';
import { useLocalStorage } from '@/hooks';

configure({ enforceActions: 'observed' });

const [id, setId] = useLocalStorage('id', uuid());

class AppStore {

    @observable id: string = id;

    @observable message: string | null = null;

    @observable pending: boolean = false;

    constructor() {
        reaction(
            () => this.id, 
            (id: string) => setId(id)
        );

        /*
        reaction(
            () => this.message,
            () => window.setTimeout(() => this.setMessage(null), 3000)
        );
        */
    }

    @action setId(id: string) {
        this.id = id;
    }

    @action setMessage(message: string | null) {
        this.message = message;
    }

    @action setPending(pending: boolean) {
        this.pending = pending;
    }
}

export default new AppStore();

export type AppStoreInterface = InstanceType<typeof AppStore>;