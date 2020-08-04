import { action, observable, reaction } from "mobx";
import uuid from 'uuid-random';
import { useLocalStorage } from '@/hooks';

class AppStore {

    @observable id = '';

    @observable flash: FlashMessageProps | null = null;

    @observable flashTimer: number | null = null;

    @observable pending = false;

    constructor() {
        const [id, setId] = useLocalStorage('id', uuid());

        reaction(
            () => this.id,
            (currentId: string) => setId(currentId)
        );

        reaction(
            () => this.flash,
            (flash: FlashMessageProps | null) => {
                if (flash) {
                    const timer = window.setTimeout(() => this.setFlash(null), flash.closeIn);
                    this.setFlashTimer(timer);
                }
            }
        );

        this.setId(id);
    }

    @action closeFlash() {
        if (!this.flash || !this.flashTimer) return;

        window.clearTimeout(this.flashTimer);
        this.setFlash(null);
        this.setFlashTimer(null);
    }

    @action setId(id: string) {
        this.id = id;
    }

    @action setFlash(message: FlashMessageProps | null) {
        this.flash = message;
    }

    @action setFlashTimer(timer: number | null) {
        this.flashTimer = timer;
    }

    @action setPending(pending: boolean) {
        this.pending = pending;
    }
}

export default new AppStore();

export type AppStoreInterface = InstanceType<typeof AppStore>;
