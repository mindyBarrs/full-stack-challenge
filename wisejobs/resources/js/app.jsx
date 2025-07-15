import { createInertiaApp } from "@inertiajs/inertia-react";
import { render } from "react-dom";

createInertiaApp({
    resolve: (name) => require(`./Pages/${name}`).default,
    setup({ el, App, props }) {
        render(<App {...props} />, el);
    },
});
