import { action, configure, observable, reaction } from "mobx";
import uuid from 'uuid-random';
import { useLocalStorage } from '@/hooks';

configure({ enforceActions: 'observed' });

class AppStore {
    @observable pending: boolean = false;

    @observable id: string = '';

    @action setId(id: string) {
        this.id = id;
    }

    @action setPending(pending: boolean) {
        this.pending = pending;
    }

    constructor() {
        const [id, setId] = useLocalStorage('id', uuid());

        this.setId(id);

        reaction(
            () => this.id,
            (id: string) => setId(id)
        );
    }
}

export default new AppStore();
