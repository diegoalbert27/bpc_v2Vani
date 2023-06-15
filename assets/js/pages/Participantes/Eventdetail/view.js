import ChangeStateEvent from "./components/change-state-event.js";
import SaveStateEvent from "./components/save-state-event.js";

export default class View {
    constructor() {
        this.changeStateEvent = new ChangeStateEvent()
        this.changeStateEvent.onChange((state) => this.previewSaveState(state))

        this.saveStateEvent = new SaveStateEvent()
    }

    previewSaveState(state) {
        if (state === this.changeStateEvent.getStateDefault()) {
            this.saveStateEvent.hideBtn()
        } else {
            this.saveStateEvent.newStateUrl(state)
            this.saveStateEvent.showBtn()
        }
    }
}
