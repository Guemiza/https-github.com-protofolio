"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.unwrapArgs = exports.isWrapper = void 0;
function isWrapper(maybeWrapper) {
    if (maybeWrapper && typeof maybeWrapper === 'object' &&
        maybeWrapper.unwrap && typeof maybeWrapper.unwrap === 'function') {
        return true;
    }
    return false;
}
exports.isWrapper = isWrapper;
function unwrapArgs(args) {
    var _a;
    const maybeNodeWrapper = args === null || args === void 0 ? void 0 : args[0];
    const maybeNodeWrapperArray = args === null || args === void 0 ? void 0 : args[1];
    const remainingArgs = (_a = args === null || args === void 0 ? void 0 : args.slice(2)) !== null && _a !== void 0 ? _a : [];
    let node;
    if (maybeNodeWrapper && isWrapper(maybeNodeWrapper)) {
        // If the first arg is a wrapper, unwrap it
        node = maybeNodeWrapper.unwrap();
    }
    else if (maybeNodeWrapper) {
        // Otherwise, assume it is just a T
        node = maybeNodeWrapper;
    }
    let nodes;
    if (maybeNodeWrapperArray && Array.isArray(maybeNodeWrapperArray) && maybeNodeWrapperArray.every(n => isWrapper(n))) {
        // If the first arg is an array of wrappers, unwrap them
        const wrappedNodes = maybeNodeWrapperArray;
        nodes = [];
        for (const n of wrappedNodes) {
            nodes.push(n.unwrap());
        }
    }
    else if (maybeNodeWrapperArray && Array.isArray(maybeNodeWrapperArray)) {
        // Otherwise, assume it is just an array of T's
        nodes = maybeNodeWrapperArray;
    }
    return [node, nodes, ...remainingArgs];
}
exports.unwrapArgs = unwrapArgs;
//# sourceMappingURL=wrapper.js.map