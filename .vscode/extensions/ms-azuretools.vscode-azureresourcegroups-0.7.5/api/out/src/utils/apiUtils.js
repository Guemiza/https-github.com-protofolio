"use strict";
/*---------------------------------------------------------------------------------------------
 *  Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.apiUtils = void 0;
const vscode = require("vscode");
var apiUtils;
(function (apiUtils) {
    class ExtensionNotFoundError extends Error {
        constructor(extensionId) {
            super(`Extension with id ${extensionId} not found.`);
        }
    }
    apiUtils.ExtensionNotFoundError = ExtensionNotFoundError;
    /**
     * Gets the exported API from the given extension id and version range.
     *
     * @param extensionId - The extension id to get the API from
     * @param apiVersionRange - The version range of the API you need. Any semver syntax is allowed. For example "1" will return any "1.x.x" version or "1.2" will return any "1.2.x" version
     * @param options - The options to pass when creating the API. If `options.extensionId` is left undefined, it's set to the caller extension id.
     * @throws Error if extension with id is not installed.
     */
    function getAzureExtensionApi(context, extensionId, apiVersionRange, options) {
        var _a;
        return __awaiter(this, void 0, void 0, function* () {
            const apiProvider = yield getExtensionExports(extensionId);
            if (apiProvider) {
                return apiProvider.getApi(apiVersionRange, Object.assign(Object.assign({}, options), { extensionId: (_a = options === null || options === void 0 ? void 0 : options.extensionId) !== null && _a !== void 0 ? _a : context.extension.id }));
            }
            throw new ExtensionNotFoundError(extensionId);
        });
    }
    apiUtils.getAzureExtensionApi = getAzureExtensionApi;
    /**
     * Get extension exports for the extension with the given id. Activates extension first if needed.
     *
     * @returns `undefined` if the extension is not installed
     */
    function getExtensionExports(extensionId) {
        return __awaiter(this, void 0, void 0, function* () {
            const extension = vscode.extensions.getExtension(extensionId);
            if (extension) {
                if (!extension.isActive) {
                    yield extension.activate();
                }
                return extension.exports;
            }
            return undefined;
        });
    }
    apiUtils.getExtensionExports = getExtensionExports;
})(apiUtils = exports.apiUtils || (exports.apiUtils = {}));
//# sourceMappingURL=apiUtils.js.map